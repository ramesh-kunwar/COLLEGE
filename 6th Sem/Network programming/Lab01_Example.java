import java.io.*;
import java.net.*;

public class Lab01_Example {

    public static void main(String[] args) {

        try {
            InetAddress addr = InetAddress.getByName("www.fb.com");
            String domainName = addr.getHostName();
            String IPName = addr.getHostAddress();

            System.out.println(domainName);
            System.out.println(IPName);
            // System.out.println("host Name: " + ip.getHostName());
            // System.out.println("host Address: " + ip.getHostAddress());
        } catch (Exception e) {
            // TODO: handle exception
            System.out.println(e);
        }

    }

}
