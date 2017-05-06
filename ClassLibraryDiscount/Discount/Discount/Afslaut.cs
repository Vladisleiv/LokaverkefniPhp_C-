using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace Discount
{
    public class Afslaut
    {
        public int total { get; set; }
        public List<string> itemList { get; set; }
        public Afslaut(int totalcost ,List<string> items)
        {
            total = totalcost;
            itemList = items;
        }

        public int returnTotal()
        {
            int temp = total;
            foreach (var item in itemList)
            {
                if (item == "Supa")
                {
                    temp -= 200;
                }
                else
                {
                    temp -= 600;
                }

            }
            return temp;
        }
        //item list : "samloka", "supa"...
        //total amaunt: 650
        //foreach item in list... 
        //supa 400 => 200, if supa total -200...
        //return total 
    }
}
