/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package imagedisplaydemo;

import java.awt.Image;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.File;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JFileChooser;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.SwingUtilities;

/**
 *
 * @author rameshkunwar
 */
public class ImageDisplayDemo extends JFrame {

    JButton btn_select;
    JLabel img_label;
    // TODO code application logic here

    public ImageDisplayDemo() {
        setTitle("Image Display");
        setBounds(100, 50, 400, 600);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(null);

        btn_select = new JButton("Select Image");
        btn_select.setBounds(20, 20, 300, 30);

        img_label = new JLabel("No icon selected");
        img_label.setBounds(20, 50, 300, 200);
        
        
        
        // adding components
        add(btn_select);
        add(img_label);

        btn_select.addActionListener(new ActionListener() {

            public void actionPerformed(ActionEvent e) {
                JFileChooser file_chooser = new JFileChooser();
                int value = file_chooser.showOpenDialog(null);

                if (value == JFileChooser.APPROVE_OPTION) {
                    File file = file_chooser.getSelectedFile();

                    if (checkImageExtension(file)) {
                        displayImageIcon(file);
                    } else {
                        img_label.setText("Please select proper image first");
                    }

                }
            }
        });

    }

    public boolean checkImageExtension(File file) {
        String extensions[] = {"jpeg", "gif", "png", "jpg", "bmp"};
        boolean status = false;
        String file_name = file.getName().toLowerCase();
        for (String ext : extensions) {
            if (file_name.endsWith(ext)) {
                status = true;
                break;
            }
        }
        return status;
    }

    public void displayImageIcon(File file) {
        ImageIcon icon = new ImageIcon(file.getAbsolutePath());
        // testing iamge 
        Image img = icon.getImage();
        Image resized_img = img.getScaledInstance(img_label.getWidth(), img_label.getHeight(), Image.SCALE_SMOOTH);
        icon = new ImageIcon(resized_img);
        img_label.setIcon(icon);

    }

    public static void main(String[] args) {

        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                new ImageDisplayDemo().setVisible(true);
            }

        });

    }

}
