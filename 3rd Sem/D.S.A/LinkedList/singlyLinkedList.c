#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

struct node
{
    int data;
    struct node *next;
};
struct node *head;
void createList(int n)
{
    struct node *newNode;
    struct node *temp;
    int data, i;
    head = (struct node *)(malloc(sizeof(struct node)));

    if (head == NULL)
    {
        printf("Unable to allcoate memory. ");
    }
    else
    {
        //  input data of node from the user
        printf("Enter the data of node 1: ");
        scanf("%d", &data);
        head->data = data;
        head->next = NULL;
        //  temp first ma hunxa so
        temp = head;

        for (int i = 1; i < n; i++)
        {
            newNode = (struct node *)(malloc(sizeof(struct node)));
            if (newNode == NULL)
            {
                printf("Unable to allocate memory.");
                break;
            }
            else
            {
                printf("Enter the data of node %d: ", i);
                scanf("%d", &data);

                newNode->data = data; // Link data field of newNode with data
                newNode->next = NULL; // Link address field of newNode with NULL

                temp->next = newNode; // Link previous node i.e. temp to the newNode

                temp = temp->next;
            }
        }
    }
}

void displayList()
{
    struct node *temp;

    /*
     * If the list is empty i.e. head = NULL
     */
    if (head == NULL)
    {
        printf("List is empty.");
    }
    else
    {
        temp = head;
        while (temp != NULL)
        {
            printf("Data = %d\n", temp->data); // Print data of current node
            temp = temp->next;                 // Move to next node
        }
    }
}

void main()
{
    int n, data;
    // Create a singly linked list of n nodes
    printf("Enter the toal number of nodes: ");
    scanf("%d", &n);
    createList(n);

    printf("Data in the list: ");
    displayList();

    getch();
}