import java.util.*;
class sa1
{
    public static void main(String args[])
    {
        Scanner sc=new Scanner(System.in);
        ArrayList<String> l1=new ArrayList<>();
        System.out.println("How Many Elements:");
        int n=sc.nextInt();
        System.out.println("Enter City Name:");
        for(int i=0;i<n;i++)
        {
            l1.add(sc.next());
        }
        System.out.println("added element are:");
        System.out.println(l1);
        Iterator<String> itr=l1.iterator();
        while(itr.hasNext())
        {
            String s=(String)itr.next();
            itr.remove();
        }
        System.out.println(l1);
    }
}