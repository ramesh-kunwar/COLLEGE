// java program to show decode method of 
// urlDecoder class

import java.io.UnsupportedEncodingException;
import java.net.URLDecoder;;

public class decoder {
    public static void main(String[] args) throws UnsupportedEncodingException {
        // encoded string
        String encodedString = "u%40geeksfor+geeks+.com";
        System.out.println("Encoded String: ");
        System.out.println(encodedString);

        // decode() method

        System.out.printf("Decoded String: ");
        System.out.println();
        System.out.println(URLDecoder.decode(encodedString, "UTF-8"));

    }
}
