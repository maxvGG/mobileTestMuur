package openwebapp;

import android.android;
import ios.ios;
import org.junit.Test;

public class openwebapp {
    // set strings as var can change to public/ protected to make them changable via a function
    protected static final String WebPage = "http://maxwordpress.ddns.net/viewWebPage.php";

    @Test
    public static void main(String[] args) throws Exception {
        // initialize and run program
        android android = new android();
        ios ios = new ios();

        android.setUp1();
        android.setUp2();
        android.setUp3();
//        ios.setUp1();

    }
}