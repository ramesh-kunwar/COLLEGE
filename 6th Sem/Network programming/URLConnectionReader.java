import java.net.*;
import java.io.*;

public class URLConnectionReader {
    public static void main(String[] args) {
        URL a = new URL("https://www.yahoo.com/");
        URLConnection yc = a.openConnection();
        BufferedReader in = new BufferedReader(new InputStreamReader(yc.getInputStream()));
        String ln;
        while ((ln = in.readLine()) != null) {
            System.out.println(ln);
        }
        in.close();

    }
}
