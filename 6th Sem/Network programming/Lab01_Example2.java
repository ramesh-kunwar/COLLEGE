
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.HashMap;
import java.util.Map;

public class Lab01_Example2 {
    public static void main(String[] args) {
        // String filePath = "/Users/username/logs/logfile.log";
        String filePath = "./demo.log";
        Map<String, Integer> pageVisitCounts = new HashMap<>();

        try {
            BufferedReader br = new BufferedReader(new FileReader(filePath));

            String line;
            while ((line = br.readLine()) != null) {
                String[] parts = line.split(" ");
                String page = parts[1];
                Integer count = pageVisitCounts.get(page);

                if (pageVisitCounts.containsKey(page)) {
                    pageVisitCounts.put(page, count + 1);
                } else {
                    pageVisitCounts.put(page, 1);
                }
            }
        } catch (Exception e) {
            // TODO: handle exception
            e.printStackTrace();
            System.out.println(e);
        }

    }
}
