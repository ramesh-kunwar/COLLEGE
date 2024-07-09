/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package javaswing.swingcomponents;

import java.awt.BorderLayout;
import java.awt.FlowLayout;
import java.awt.GridLayout;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;


public class Quote {
    public Quote(){
        JFrame frame = new JFrame();
        frame.setLayout(new BorderLayout(10,200)); // {setting frame layout}
        // set bound x,y , widhth, height
        frame.setBounds(500,100,500,600);
        
        frame.setTitle("Quote Generator");
        frame.setVisible(true);
        
        // adding other components to frame
        
        JLabel title = new JLabel();
        title.setText("Welcome To Quote Generator");
        JLabel lbl_quote = new JLabel();
        lbl_quote.setText("Your Quote");
        JLabel copyright = new JLabel("Copyright @2024");
        
        
        JTextField quote = new JTextField();
        quote.setSize(600, 100);
        
        
        // to show components in we need to add them to the frame
          frame.add("North",title);
        frame.add("Center",quote);
        frame.add("South", copyright);
      
       
    }
    
    public static void main(String[] args) {
        Quote quote = new Quote();
    }
    
}
