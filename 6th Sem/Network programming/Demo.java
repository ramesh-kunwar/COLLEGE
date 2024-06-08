import java.net.*;

public class Demo {
    public static int getVersion(InetAddress ia) {
        byte[] address = ia.getAddress();
        if (address.length == 4) {
            return 4;
        } else if (address.length == 16) {
            return 6;
        } else {
            return -1;
        }
    }

    public static void main(String[] args) {

        try {
            // InetAddress ia = InetAddress.getByName(".com");
            InetAddress ia = InetAddress.getByName("192.168.1.1");
            int version = getVersion(ia);
            System.out.println("IP version: " + version);
        } catch (UnknownHostException e) {
            e.printStackTrace();
            System.out.println(e.getMessage());
        }
    }
}
