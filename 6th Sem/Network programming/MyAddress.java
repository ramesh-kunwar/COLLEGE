import java.net.InetAddress;

public class MyAddress {
    public static void main(String[] args) {
        try {
            InetAddress addr = InetAddress.getLocalHost();
            String dottedQuad = addr.getHostAddress();
            System.out.println("My address is " + dottedQuad);
        } catch (Exception e) {

            System.out.println(e);
        }
    }
}
