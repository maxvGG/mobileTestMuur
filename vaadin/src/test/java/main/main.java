package main;

import android.android;
import ios.ios;
import org.junit.Test;

public class main {
    // set strings as var can change to public/ protected to make them changable via a function
//    protected static final String APPIUM = "http://localhost:4723/wd/hub";
    protected static final String WebPage = "https://elo.glu.nl";

    @Test
    public void RunWebApp() throws Exception {
        android android = new android();
        ios ios = new ios();

        android.setUp();
        ios.setUp();

    }
}
