
// import java.net.ServerSocket;
import java.net.*;
import java.io.*;

public class C01_RandomPort {

    public static void main(String[] args) {
        try {
            ServerSocket server = new ServerSocket(0);
            System.out.println("Random port: " + server.getLocalPort());
        } catch (Exception e) {
            // TODO: handle exception
            System.err.println(e);
        }
    }
}