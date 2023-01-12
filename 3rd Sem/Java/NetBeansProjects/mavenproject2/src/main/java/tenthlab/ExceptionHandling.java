/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package tenthlab;

/**
 *
 * @author rameshkunwar
 */
public class ExceptionHandling {
    public static void main(String[] args) {
        try {
            System.out.println(100 / 0);
        } catch (ArithmeticException e) {
            System.out.println("Message: " + e.getMessage());
        }
        // Case two: Custom Error message
        try {
            int num_one = 452014;
            double result = num_one / 0;
            System.out.println("result:" + result);
        } catch (ArithmeticException e) {
            System.out.println("Message: Cannot be divided by zero");
        }
        ///Null pointer Exception 
        try {
            String name = null;
            int val = Integer.parseInt(name);
            System.out.println(name);
        } catch (NumberFormatException e) {
            System.out.println("Message: " + e.getMessage());
        }

        int arr[] = {1, 2, 3, 4, 5, 6, 7, 8, 9};
        try {
            System.out.println("Value of index 15 is " + arr[15]);
        } catch (ArrayIndexOutOfBoundsException e) {
            System.out.println("Message: " + e.getMessage());
        }
        try {
            int[] myNumbers = {1, 2, 3};
            System.out.println(myNumbers[10]);
        } catch (Exception e) {
            System.out.println("Something went wrong.");
        } finally {
            System.out.println("The 'try catch' is finished.");
        }
    }
}
