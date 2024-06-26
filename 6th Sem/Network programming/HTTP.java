import java.net.URL;
import java.net.URLConnection;
import java.util.Map;
import java.util.List;

public class HTTP {
    public static void main(String[] args) {
        try {

            URL obj = new URL("http://www.google.com");
            URLConnection conn = obj.openConnection();
            Map<String, List<String>> map = conn.getHeaderFields();

            System.out.println("Printing all response header for url : " + obj.toString() + "\n");

            for (Map.Entry<String, List<String>> entry : map.entrySet()) {
                System.out.println(entry.getKey() + " : " + entry.getValue());
            }
            System.out.println("\nGet Response Header By Key ...\n");
            List<String> contentLength = map.get("Content-Length");
            if (contentLength == null) {
                System.out.println("'Content-Length' doesn't present in Header!");
            } else {
                for (String header : contentLength) {
                    System.out.println("Content-Lenght: " + header);
                }
            }
        } catch (Exception e) {
            // TODO: handle exception
            System.out.println(e.getMessage());
        }
    }
}
