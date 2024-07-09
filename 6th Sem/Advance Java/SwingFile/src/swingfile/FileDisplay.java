
package swingfile;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;
import javax.swing.JButton;
import javax.swing.JFileChooser;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.SwingUtilities;

import javax.swing.SwingUtilities;

/**
 *
 * @author DELL
 */
public class FileDisplay extends JFrame {
    
    JLabel title, file_select;
    JButton btn_select;
    JTextArea file_content;
    JScrollPane scroll;
    
    public FileDisplay(){
        setTitle("File Content Display");
        setBounds(10, 50,500,600);// x,y, width, height
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(null);// to do a free design
        //defining components
        title = new JLabel("File Content Display | Java Swing");
        title.setBounds(20,20,400,20);
        
        btn_select = new JButton();
        btn_select.setText("Select File");
        btn_select.setBounds(50,40,400,20);
        file_select = new JLabel();
        file_select.setText("No file selected");
        file_select.setBounds(50,90,400,20);
        
        
        file_content = new JTextArea("File Content");
        file_content.setWrapStyleWord(true);
        file_content.setEditable(false);
        file_content.setLineWrap(true);
        
        
        
        scroll = new JScrollPane(file_content);
        scroll.setBounds(50,110,400,500);
        
        
        //adding components
        
        add(title);// JlABEL
        add(btn_select);//jbUTTON
        add(file_select);
        add(scroll);// Jscrollpane
        
        // adding action listener to button\
        
        btn_select.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                JFileChooser file_chooser= new JFileChooser();
                int value = file_chooser.showOpenDialog(null);
                if(value==JFileChooser.APPROVE_OPTION){
                    // to select file we parse the selected file to file object
                    File file = file_chooser.getSelectedFile();
                    file_select.setText(file.getAbsolutePath());
                    if(checkFileExtension(file)){
                        displayFileContent(file);
                    }else{
                        JOptionPane.showMessageDialog(this,"please select correct file");
                    }
                }
            }
        });
        
    
    }
 // method to check file extension
    public boolean checkFileExtension(File file) {
        String extensions[] = {"txt", "docx", "pdf"};
        boolean status = false;

        String file_name = file.getName().toLowerCase();
        for (String ext : extensions) {
            if (file_name.endsWith((ext))) {
                status = true;
                break;
            } else {
                System.out.println("Please select correct file");

            }

        }
        return status;
    }

    public void displayFileContent(File file) {
        try {

            BufferedReader bf = new BufferedReader(new FileReader(file));
            String line;
            file_content.setText("");
//            while ((line == bf.readLine() != null)) {
//                file_content.append(line);
//            }

while((line = bf.readLine()) != null){
    file_content.append(line + "\n");
}

        } catch (IOException e) {
            System.out.println(e.getMessage());
        }
    }
    
    public static void main(String[] args) {
         SwingUtilities.invokeLater(new Runnable(){
        @Override
        public void run(){
            new FileDisplay().setVisible(true);
        }
    });
    
    }
    
}