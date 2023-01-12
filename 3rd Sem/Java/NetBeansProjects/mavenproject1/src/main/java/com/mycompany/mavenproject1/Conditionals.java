/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.mavenproject1;

/**
 *
 * @author rameshkunwar
 */
public class Conditionals {
    public static void main(String[] args) {
        float obtainedMarks = 70.5f;
        if(obtainedMarks <0 || obtainedMarks > 100){
            System.out.println("Please enter a valid number");
        }else if(obtainedMarks < 40){
            System.out.println("You failed the exam");
        }else{
            System.out.println("You passed the exam");
//            nested if
if(obtainedMarks >90){
    System.out.println("A+");
}else if(obtainedMarks >80 && obtainedMarks <=90){
    System.out.println("A");
}else if(obtainedMarks >70 && obtainedMarks <=80){
    System.out.println("B+");
}else{
    System.out.println("B");
}
        }
    
}
}
