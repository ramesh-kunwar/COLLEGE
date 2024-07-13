// package Chapte_6_and7;

import java.io.IOException;
import java.io.PrintStream;;
;

public class DateServer {
   public static void main(String[] args) throws IOException {
        System.out.println("Hello");

        try (var listener = new java.net.ServerSocket(59090)) {
            System.out.println("The data server is running...");
            while (true) {
                try (var socket = listener.accept()) {
                    var out = new java.io.PrintWriter(socket.getOutputStream(), true);
                    out.println(new java.util.Date().toString());
                }
            }

        } catch (Exception e) {
            // TODO: handle exception
            System.out.println("Error: " + e.getMessage());
        }
    }
}
