#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
struct Node
{
    int data;
    struct Node *next; // Node type pointer
};
void linkedListTraversal(struct Node *ptr)
{
    while (ptr != NULL)
    {
        printf("Data: %d\n", ptr->data);
        ptr = ptr->next;
    }
}
struct Node *insertAtFirst(struct Node *head, int data)
{
    struct Node *ptr = (struct Node *)(malloc(sizeof(struct Node)));
    ptr->next = head;
    ptr->data = data;
    return ptr;
}
void main()
{

    // memory allocation for nodes in the linked list
    struct Node *head = (struct Node *)(malloc(sizeof(struct Node)));
    struct Node *second = (struct Node *)(malloc(sizeof(struct Node)));
    struct Node *third = (struct Node *)(malloc(sizeof(struct Node)));
    struct Node *fourth = (struct Node *)(malloc(sizeof(struct Node)));

    // link first and second node
    head->data = 7;
    head->next = second;

    // link second and third node
    second->data = 10;
    second->next = third;

    // link third and fourth node
    third->data = 100;
    third->next = fourth;

    // Terminate the linked list at fourth
    fourth->data = 97;
    fourth->next = NULL;

    head = insertAtFirst(head, 56);
    linkedListTraversal(head);
    getch();
}