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
    public partial class kennitala : Form
    {
        Form1 form = new Form1();
        Gagnagrunnur gagnagrunnur = new Gagnagrunnur();
        public kennitala()
        {
            InitializeComponent();
            gagnagrunnur.TengingGagnagrunur();
        }

       //Here down you can look at all code about the all buttons
        private void btKt0_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 0;
        }

        private void btKt1_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 1;
        }

        private void btKt2_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 2;
        }

        private void btKt3_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 3;
        }

        private void btKt4_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 4;
        }

        private void btKt5_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 5;
        }

        private void btKt6_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 6;
        }

        private void btKt7_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 7;
        }

        private void btKt8_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 8;
        }

        private void btKt9_Click(object sender, EventArgs e)
        {
            tbSladu.Text = tbSladu.Text + 9;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            int length = tbSladu.TextLength - 1;
            string text = tbSladu.Text;
            tbSladu.Clear();
            
            for (int i = 0; i < length; i++)
            {
                tbSladu.Text = tbSladu.Text + text[i];
            }
        }

        private void btEnter_Click(object sender, EventArgs e)
        {
            string innkenn = tbSladu.Text;
            string konni = null;
            try
            {
                //Here i make so when you input the correct kennitala programm will look at my database and if that kennitala there programm will show you my name and some message
                konni = gagnagrunnur.LesautSQLToflu(innkenn);
                string[] konniannar = konni.Split(':');
                MessageBox.Show("þú ert í gagnagrunninum " + konniannar[0] + " " + konniannar[1] + " \nTakk fyrir og Velkomin");
                form.ClearAfterKennitala();

                this.Close();//That part after you press ok will close the windows with kennitala and turn you back to the main screen

                
            }
            catch (Exception)
            {
                //Here will give you errore if you input the wrong kennitala
                MessageBox.Show("Þú ert ekki í gagnagrunninum.");
            }
            
             
        }
    }
}
