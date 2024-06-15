import java.net.*;

public class URLExample {
    public static void main(String[] args) throws Exception {
        String str = "https://www.google.com/search?q=helloworld&oq=helloworld&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQLhhA0gEIMTIxNWowajGoAgCwAgA&sourceid=chrome&ie=UTF-8";
        // String str = "";

        // creation of new URI by parsing the string
        URI exampleuri = new URI(str);

        // different methods of uri class
        System.out.println("Host of URI is " + exampleuri.getHost());
        System.out.println("Port of URI is " + exampleuri.getPort());
        System.out.println("Raw Path of URI is " + exampleuri.getRawPath());
        System.out.println("Path of URI is " + exampleuri.getPath());
        System.out.println("Query of URI is " + exampleuri.getQuery());
        System.out.println("Raw Query URI is " + exampleuri.getRawQuery());
        System.out.println("Fragment of URI is " + exampleuri.getFragment());
        System.out.println("Raw Fragment of URI is " + exampleuri.getRawFragment());

        // another uri in order to demonstrate the method compareTo and equals
        URI exampleuri2 = new URI(str + "fr");
        System.out.println("CompareTo exampleuri2= " + exampleuri.compareTo(exampleuri2));
        System.out.println("Equals of the URI is= " + exampleuri.equals(exampleuri2));

    }
}
