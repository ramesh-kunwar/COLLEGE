// how to find proxy settings and create a proxy conneciton
// on a system usign put method of 
// systemSetting and getResponse of 
// HttpURLConnection class

import java.net.HttpURLConnection;
import java.net.InetSocketAddress;
import java.net.Proxy;
import java.net.URI;
import java.net.URL;
import java.util.Properties;
import java.net.ProxySelector;

public class Proxy1 {
    public static void main(String[] args) {

        try {
            Properties systemSettings = System.getProperties();
            systemSettings.put("proxySet", "true");
            systemSettings.put("http.proxyHost", "proxy.mycompany1.local");
            systemSettings.put("http.proxyPort", "80");

            URL u = new URL("http://www.google.com");
            HttpURLConnection con = (HttpURLConnection) u.openConnection();

        } catch (Exception e) {
            // TODO: handle exception
        }
    }
}
