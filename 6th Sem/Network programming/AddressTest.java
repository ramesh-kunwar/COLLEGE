import java.net.*;
public class AddressTest {
    public static int getVersion(InetAddress ia){
        byte[] address= ia.getAddress();
        if (address.length==4)return 4;
        else if(address.length==16)return 6;
        else return -1;
    }
    public static void main(String[]args){
        try{
                InetAddress ia = InetAddress.getByName("2001:db8::1");
                int version = getVersion(ia);
                System.out.println(version);
        }catch(Exception e){
            System.out.println(e.getMessage());
        }
    }

}