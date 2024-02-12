#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#define MAX 200
typedef struct dir
{
char fname[20];
int start;
struct dir *next;
}NODE;
NODE *first,*last;
int bit[MAX],n,fb;
void init()
{
int i;
printf("Enter total no of disk blocks");
scanf("%d",&n);
fb=n;
for(i=0;i<10;i++)
{
int k=rand()%n;
bit[k]=-2;
if(bit[k]!=-2)
{
fb--;
}
}

}
void show_bitvector()
{
int i;
for(i=0;i<n;i++)
printf("%d",bit[i]);
printf("\n");
}
void show_dir()
{
NODE *p;
int i;
printf("File\tChain\n");
p=first;
while(p!=NULL)
{
printf("%s\t",p->fname);
i=p->start;
while(i!=-1)
{
printf("%d->",i);
i=bit[i];
}

printf("NULL\n");
p=p->next;
}

}
void create()
{
NODE *p;
char fname[20];
int nob,i,j;
printf("Enter the file name");
scanf("%s",fname);
printf("Enter no of blocks");
scanf("%d",&nob);
if(nob>fb)
{
printf("Failed to create file %S\n",fname);
return;
}
for(i=0;i<n;i++)
{
if(bit[i]==0)break;
}
p=(NODE*)malloc(sizeof(NODE));
strcpy(p->fname,fname);
p->start=-i;
p->next=NULL;
if(first==NULL)
first=p;
else
last->next=p;
fb=nob;
j=i+1;
nob--;
while(nob>0)
{
if(bit[j]==0)
{
bit[i]=j;
i=j;
nob--;
}
j++;
}
bit[i]=-1;
printf("File %s created successfully\n",fname);
}
void delete()
{

NODE *p,*q;
char fname[20];
int i,j,nob=0;
printf("Enter file to be deleted");
scanf("%s",fname);
p=q=first;
while(p!=NULL)
{
if(strcmp(p->fname,fname)==0)
break;
q=p;
p=p->next;
}
if(p==NULL)
{
printf("File %s not found\n",fname);
return;
}
i=p->start;
while(i!=-1)
{
nob++;
j=i;
i=bit[i];
bit[j]=0;
}
fb +=nob;
if(p==first)
first=first->next;
else if(p==last)
{
last=q;
last->next=NULL;
}
else
{
q->next=p->next ;
}
free(p);
printf("File %s deleted successfully\n",fname);
}
int main()
{
int ch;
init();
while(1)
{

printf("1.Show bit vector\n2.create new file\n3.show directory\n4.delete file\n5.exit\n");
printf("Enter your choice");
scanf("%d",&ch);
switch(ch)
{
case 1: show_bitvector();break;
case 2: create();break;
case 3: show_dir();break;
case 4: delete();break;
case 5: exit(0);
}
}
return 0;
}