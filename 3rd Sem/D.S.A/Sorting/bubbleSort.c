#include <stdio.h>
#include <conio.h>
#include <string.h>

void bubbleSort()
{
    int arr[] = {5, 10, 0, 1, -9, 6};
    // loop till last index (array length - 1)
    int i, j, temp;
    for (i = 0; i < 6; i++) // i< array length
    {
        for (j = 1; j < 6 - i; j++) // j < array length - i
        {
            // swap if the items are smaller than the prev vlaue
            if (arr[j] < arr[j - 1])
            {
                // swap with previous value
                temp = arr[j];
                arr[j] = arr[j - 1];
                arr[j - 1] = temp;
            }
            {
                /* code */
            }
        }
    }

    printf("Sorted value are: \n");
    for (i = 0; i < 6; i++)
    {
        printf("%d\t", arr[i]);
    }
}
void main()
{

    bubbleSort();
    getch();
}