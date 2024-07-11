import java.io.*;
import java.net.*;

public class C02_Example {

    public static void main(String[] args) {

        try {
            InetAddress addr = InetAddress.getByName("www.facebook.com");
            String domainName = addr.getHostName();
            String IPName = addr.getHostAddress();

            System.out.println(domainName);
            System.out.println(IPName);
        } catch (Exception e) {
            // TODO: handle exception
            System.out.println(e);
        }

    }

}