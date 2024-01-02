namespace AbstractionExample
{

    public abstract class Shape
    {
        // abstract method fro calculating area
        public abstract double CalculateArea();

        public void DisplayInfo()
        {
            System.Console.WriteLine($"This is a {this.GetType().Name}");
        }

    }

    public class Circle : Shape
    {
        public double Radius { get; set; }

        public Circle(double Radius)
        {
            this.Radius = Radius;
        }

        public override double CalculateArea()
        {
            return Math.PI * this.Radius * this.Radius;

        }
    }

    public class Rectangle : Shape
    {
        public double Width { get; set; }
        public double Height { get; set; }

        public Rectangle(double Width, double Height)
        {
            this.Width = Width;
            this.Height = Height;
        }

        public override double CalculateArea()
        {
            return this.Width * this.Height;
        }
    }
    class Program
    {
        public static void Main()
        {
            System.Console.WriteLine("Hello World!");

            Circle circle = new Circle(10);
            circle.DisplayInfo();
            double circleArea = circle.CalculateArea();
            System.Console.WriteLine($"Circle Area: {circleArea}" );

            Rectangle rectangle = new Rectangle(10, 20);
            rectangle.DisplayInfo();
            double rectangleArea = rectangle.CalculateArea();
            System.Console.WriteLine($"Rectangle Area: {rectangleArea}" );






        }
    }
}