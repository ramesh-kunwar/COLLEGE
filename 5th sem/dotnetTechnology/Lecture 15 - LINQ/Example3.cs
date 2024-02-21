namespace Example3
{

    class Student
    {
        public int sid { get; set; }
        public string name { get; set; }
        public string address { get; set; }

        public Student(int sid, string name, string address)
        {
            this.sid = sid;
            this.name = name;
            this.address = address;
        }

    }
    class Program
    {
        public static void Main()
        {
            List<Student> myList = new List<Student>()
            {
                new Student(1, "Hari", "Bkt"),
                new Student(2, "Ram", "Ktm"),
                new Student(3, "Shyam", "Bkt"),
                new Student(4, "Gita", "Ktm"),

            };

            var result = myList.Where(s => s.address.Equals("Ktm") && s.sid.Equals(2));
            // var result = myList.Where(s => s.address == ("Ktm") && s.sid == (2));

            // var result2 = from name in myList select name OrderBy(name => name.name);

            // select name order by name in ascending order where address is ktm
            // var result3 = from list in myList where list.address == "Ktm" select list;
            // var result4 = result3.OrderBy(name => name.name);

            var result3 = (myList.Where(s => s.address.Equals("Ktm"))).OrderBy(s => s.name);

            foreach (var res in result3)
            {
                System.Console.WriteLine(res.sid + " " + res.name + " " + res.address);
                // System.Console.WriteLine(res.name);
            }



        }
    }
}