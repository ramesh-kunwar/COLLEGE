import java.net.*;

public class SpamCheck {
    public static final String BLACKHOLE = "https://www.spamhaus.org/";
    // public static final String BLACKHOLE = "sbl.spamhaus.org";

    public static boolean isSpammer(String arg) {
        try {
            InetAddress address = InetAddress.getByName(arg);
            byte[] quad = address.getAddress();
            String query = BLACKHOLE;
            for (int i = quad.length - 1; i >= 0; i--) {
                int unsignedByte = quad[i] < 0 ? quad[i] + 256 : quad[i];
                query = unsignedByte + "." + query;
            }
            InetAddress.getByName(query);

            return true;
        } catch (UnknownHostException e) {
            return false;
        }
    }

    public static void main(String[] args) {
        for (String arg : args) {
            if (isSpammer(arg)) {
                System.out.println(arg + " is a known spammer.");
            } else {
                System.out.println(arg + " appears legitimate.");
            }
        }
    }
}
