import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.HashMap;
import java.util.Map;


public class Lab01_Example2 {
    public static void main(String[] args) {
        // String filePath = "/Users/username/logs/logfile.log";
        // String filePath = "./demo.log";
        // String filePath = "/Library/Logs/LKDC-setup.log";
        String filePath = "/Library/Logs/LKDC-setup.log";
        Map<String, Integer> pageVisitCounts = new HashMap<>();

        try (BufferedReader br = new BufferedReader(new FileReader(filePath))) {
            String line;
            while ((line = br.readLine()) != null) {
                String[] parts = line.split(" ");
                String page = parts[1];
                Integer count = pageVisitCounts.getOrDefault(page, 0);
                pageVisitCounts.put(page, count + 1);
            }
        } catch (IOException e) {
            e.printStackTrace();
            System.out.println(e.getMessage());
        }

        // Output the page visit counts
        for (Map.Entry<String, Integer> entry : pageVisitCounts.entrySet()) {
            System.out.println("Page: " + entry.getKey() + " - Visits: " + entry.getValue());
        }
    }
}
