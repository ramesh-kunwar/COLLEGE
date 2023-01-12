/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.mavenproject1;

/**
 *
 * @author rameshkunwar
 */
public class Loops {

    public static void main(String[] args) {
//        while loop
        System.out.println("While Loop");
        int i = 0;
        while (i < 4) {
            System.out.println("I = " + i);
            i++;
        }
        System.out.println("");

        System.out.println("For Loop");
//        for loop
        String places[] = {"Kathmandu", "Lalitpur", "Bhaktapur", "Lumbini"};
        System.out.println("Places = ");

        for (int j = 0; j < places.length; j++) {
            System.out.println(places[j]);

        }
        System.out.println("");

        System.out.println("Do while loop");
//        do while loop
        int a = 1;
        do {
            System.out.println("a = " + a);
            a++;
        } while (a < 1);
    }
}
