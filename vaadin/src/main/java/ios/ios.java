package ios;

import openwebapp.openwebapp;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.remote.RemoteWebDriver;

import java.net.URL;

public class ios extends openwebapp {
    private static RemoteWebDriver driver;
    private static String appium = "http://localhost:4723/wd/hub";

    public static void setUp1() throws Exception {
        DesiredCapabilities caps = new DesiredCapabilities();
        caps.setCapability("platformName", "iOS");
        caps.setCapability("automationName", "XCUITest");
        caps.setCapability("browserName", "Chrome");
        driver = new RemoteWebDriver(new URL(appium), caps);
        driver.get("http://maxwordpress.ddns.net/viewWebPage.php");
    }
}
