namespace MultipleInheritance
{

  public interface IDisplayable
  {
    void Display();
  }

  public interface IPlayable
  {
    void Play();
  }

  public class MultimediaDevice : IDisplayable, IPlayable
  {

    public void Display()
    {
      System.Console.WriteLine("Multimedia Display");
    }
    public void Play()
    {
      System.Console.WriteLine("Play");
    }
  }
  class Program
  {
    public static void Main()
    {
      MultimediaDevice m = new MultimediaDevice();
      m.Display();
    }
  }
}