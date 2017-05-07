using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace Lokaverkefni
{
    class Gagnagrunnur
    {
        // server segir til um hvar serverinn er hýstur, hjá okkur er það localhost
        private string server;

        //database nafnið á gagnagrunninum sem verið er að nota
        private string database;

        //uid erMySQL netedanafnið
        private string uid;

        //password er MySQL lykilorðið
        private string password;

        //tengistrengur contains the connection string to connect to the database
        // and will be assinged to the connection variable.
        string tengistrengur = null;

        //fyrirspurn inniheldur viðeigandi fyrirspurn hverju sinni
        string fyryrspurn = null;

        MySqlConnection sqltenging;
        MySqlCommand nySQLskipun;
        MySqlDataReader sqllesari = null;

        public void TengingGagnagrunur()
        {
            server = "82.148.66.15";//ip talan fyrir phpMyAdmin
            database = "0206953159_php_c# ";
            uid = "0206953159";
            password = "peskivreme95";

            tengistrengur = "server= " + server + ";userid= " + uid + ";password= " + password + ";database= " + database;
            sqltenging = new MySqlConnection(tengistrengur);
        }

        //þessi aðferð athugar hvort tenging sé kominn á eða ekki
        private bool OpenConnection()
        {
            try
            {
                sqltenging.Open();
                return true;
            }
            catch (MySqlException ex)
            {
                
                throw ex;
            }
        }
          
        //þessi aðferð lokar teningu eftir notkun
        private bool CloseConnection()
        {
            try
            {
                sqltenging.Close();
                return true;
            }
            catch (MySqlException ex)
            {
                
                throw ex;
            }
        }
        
        //Þessi aðferð les úr SQL gagnagrunni allar færslu og birtir í víðeigandi töflu
        public string LesautSQLToflu(string kt)
        {
            //List<string> Faerslur = new List<string>();
            string Faerslur = null;
            string lina = null;
            if (OpenConnection()==true)
            {
                fyryrspurn = "SELECT Name,Lastname,Kennitala FROM customers where kennitala='"+kt+"'";
                nySQLskipun = new MySqlCommand(fyryrspurn, sqltenging);
                sqllesari = nySQLskipun.ExecuteReader();
                while (sqllesari.Read())
                {
                    for (int i = 0; i < sqllesari.FieldCount; i++)
                    {
                        lina += (sqllesari.GetValue(i).ToString()) + ":";
                    }
                    Faerslur = lina;
                    
                }
                CloseConnection();
                return Faerslur;
            }
            return Faerslur;
        }
        public string[] returnUserInfo(string kt)
        {
            string[] gogn = new string[4];
            if (OpenConnection() == true)
            {
                fyryrspurn = "SELECT Name,Lastname,Kennitala FROM customers where kennitala='" + kt + "'";
                nySQLskipun = new MySqlCommand(fyryrspurn, sqltenging);
                sqllesari = nySQLskipun.ExecuteReader();
                while (sqllesari.Read())
                {
                    gogn[0] = sqllesari.GetValue(0).ToString();
                    gogn[1] = sqllesari.GetValue(1).ToString();
                    gogn[2] = sqllesari.GetValue(2).ToString();
                }
                sqllesari.Close();
                CloseConnection();
                return gogn;
            }
            return gogn;
        }

    }
}
