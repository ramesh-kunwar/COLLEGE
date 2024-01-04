namespace MethodOverriding
{
    abstract class Shape
    {
        public abstract double Area();
    }

    class Rectangle : Shape
    {
        private double length;
        private double width;

        public Rectangle(double length, double width)
        {
            this.length = length;
            this.width = width;
        }
        public override double Area()
        {
            double result = this.length * this.width;
            return result;
        }
    }


    class Circle : Shape
    {
        private double radius;

        public Circle(double radius)
        {
            this.radius = radius;
        }

        public override double Area()
        {
            return 3.1415 * this.radius * this.radius;
        }
    }

    class Triangle : Shape
    {
        private double triBase;
        private double height;

        public Triangle(double triBase, double height)
        {
            this.triBase = triBase;
            this.height = height;
        }

        public override double Area()
        {
            double result = 0.5 * this.triBase * this.height;
            return result;
        }
    }

    class MethodOverriding
    {
        public static void Main()
        {
            System.Console.WriteLine("p");
            Rectangle rect = new Rectangle(2, 3);
            System.Console.WriteLine("Area of rect is " + rect.Area());

            Circle circle = new Circle(2);
            System.Console.WriteLine("Area of circle is " + circle.Area());

            Triangle tri = new Triangle(2, 4);
            System.Console.WriteLine("Area of triangle is " + tri.Area());
        }
    }
}