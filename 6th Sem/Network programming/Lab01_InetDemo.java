import java.io.*;
import java.net.*;

public class Lab01_InetDemo {
    public static void main(String[] args) {

        try {
            InetAddress ip = InetAddress.getByName("www.javatpoint.com");
            System.out.println("host Name: " + ip.getHostName());
            System.out.println("host Address: " + ip.getHostAddress());
        } catch (Exception e) {
            // TODO: handle exception
            System.out.println(e);
        }

    }
}