using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Lokaverkefni
{
    public partial class Form1 : Form
    {
        int total = 0;
        public Form1()
        {
            InitializeComponent();
        }

        private void btSamloka_Click(object sender, EventArgs e)
        {
            int samloka= 460;
            MainScreen.Text += "Samloka                                                "+samloka+"kr\n";
            total += samloka;
            price_all.Text = total + "kr";
        }

        private void btLangloka_Click(object sender, EventArgs e)
        {
            int langloka = 590;
            MainScreen.Text += "Langloka                                               "+langloka+"kr\n";
            total += langloka;
            price_all.Text = total + "kr";
        }

        private void btKjötHambTortil_Click(object sender, EventArgs e)
        {
            int kjot = 675;
            MainScreen.Text += "Kjötloka/Hamborgar/Tortilla                    "+kjot+"kr\n";
            total += kjot;
            price_all.Text = total + "kr";
        }

        private void button7_Click(object sender, EventArgs e)
        {
            int luxus = 990;
            MainScreen.Text += "Lúxus Samloka                                      "+luxus+"kr\n";
            total += luxus;
            price_all.Text = total + "kr";
        }

        private void btGos_Click(object sender, EventArgs e)
        {
            int gos = 265;
            MainScreen.Text += "Gos                                                       "+gos+"kr\n";
            total += gos;
            price_all.Text = total + "kr";
        }

        private void btJogurt_Click(object sender, EventArgs e)
        {
            int jogurt = 190;
            MainScreen.Text += "Jógurt                                                    "+jogurt+"kr\n";
            total += jogurt;
            price_all.Text = total + "kr";
        }

        private void btSafi_Click(object sender, EventArgs e)
        {
            int safi = 165;
            MainScreen.Text += "Safi i fernu                                             "+safi+"kr\n";
            total += safi;
            price_all.Text = total + "";
        }

        private void btSkyr_Click(object sender, EventArgs e)
        {
            int skyr = 260;
            MainScreen.Text += "Skyr                                                      "+skyr+"kr\n";
            total += skyr;
            price_all.Text = total + "";
        }

        private void btFloska_Click(object sender, EventArgs e)
        {
            int floska = 235;
            MainScreen.Text += "Safi í flösku                                           "+floska+"kr\n";
            total += floska;
            price_all.Text = total + "";
        }

        private void btSalatbar_Click(object sender, EventArgs e)
        {
            int salatbar = 1160;
            MainScreen.Text += "Salatbar                                               "+salatbar+"kr\n";
            total += salatbar;
            price_all.Text = total + "";
        }

        private void btOrkubar_Click(object sender, EventArgs e)
        {
            int orkubar = 430;
            MainScreen.Text += "Örkubar                                                 "+orkubar+"kr\n";
            total += orkubar;
            price_all.Text = total + "";
        }

        private void button16_Click(object sender, EventArgs e)
        {
            int auka = 220;
            MainScreen.Text += "Auka Salat                                             "+auka+"kr\n";
            total += auka;
            price_all.Text = total + "";
        }

        private void btHeitmat_Click(object sender, EventArgs e)
        {
            int mat = 1160;
            MainScreen.Text += "Heit Máltið                                           "+mat+"kr\n";
            total += mat;
            price_all.Text = total + "";
        }

        private void btSupa_Click(object sender, EventArgs e)
        {
            int supa = 400;
            MainScreen.Text += "Supa                                                     "+supa+"kr\n";
            total += supa;
            price_all.Text = total + "";
        }

        private void btHnetupoki_Click(object sender, EventArgs e)
        {
            int hnet = 330;
            MainScreen.Text += "Hnetupoki                                              "+hnet+"kr\n";
            total += hnet;
            price_all.Text = total + "";
        }

        private void button6_Click(object sender, EventArgs e)
        {
            int graenmetis = 1160;
            MainScreen.Text += "Grænmetisrétt                                      "+graenmetis+"kr\n";
            total += graenmetis;
            price_all.Text = total + "";
        }

        private void btEinnota_Click(object sender, EventArgs e)
        {
            int einota = 70;
            MainScreen.Text += "Einnota Paka                                           "+einota+"kr\n";
            total += einota;
            price_all.Text = total + "";
        }

        private void btSukk_Click(object sender, EventArgs e)
        {
            int sukuladi = 260;
            MainScreen.Text += "Sukkulaði                                              "+sukuladi+"kr\n";
            total += sukuladi;
            price_all.Text = total + "";
        }

        private void btClear_Click(object sender, EventArgs e)
        {
            MainScreen.Clear();
            price_all.Clear();
            total = 0;
        }

        public void ClearAfterKennitala()
        {
            MainScreen.Clear();
        }

        private void button34_Click(object sender, EventArgs e)
        {
            Money.Clear();
        }

        private void btEyda_Click(object sender, EventArgs e)
        {
            int length = Money.TextLength - 1;
            string text = Money.Text;
            Money.Clear();

            for (int i = 0; i < length; i++)
            {
                Money.Text = Money.Text + text[i];
            }
        }

        private void bt0_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 0;
        }

        private void btkoma_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + ",";
        }

        private void bt00_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 0+0;
        }

        private void bt1_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 1;
        }

        private void bt2_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 2;
        }

        private void bt3_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 3;
        }

        private void bt4_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 4;
        }

        private void bt5_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 5;
        }

        private void bt6_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 6;
        }

        private void bt7_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 7;
        }

        private void bt8_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 8;
        }

        private void bt9_Click(object sender, EventArgs e)
        {
            Money.Text = Money.Text + 9;
        }

        private void btKt_Click(object sender, EventArgs e)
        {
            kennitala kt = new kennitala();
            kt.Show();  
        }


        private void btPenning_Click(object sender, EventArgs e)
        {
            int cost = Convert.ToInt32(price_all);
            int cash = Convert.ToInt32(Money);
            if (cost>cash)
            {
                MessageBox.Show("I need more money!");
            }
            else 
            {
                MessageBox.Show("Thank you.");
            }
            
        }

       
        private void price_all_TextChanged(object sender, EventArgs e)
        {
            
        }

    }
}
