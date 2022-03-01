
## PHP CHECKER BOT FOR TELEGRAM.

A Card Checker Bot For Telegram Based On Telegram.




## Deployment

&rarr; XAMPP

- Download XAMPP [Windows.exe](https://www.apachefriends.org/xampp-files/7.4.27/xampp-windows-x64-7.4.27-2-VC15-installer.exe), [Linux.run](https://www.apachefriends.org/xampp-files/7.4.27/xampp-linux-x64-7.4.27-2-installer.run), [Mac.dmg](https://www.apachefriends.org/xampp-files/7.4.27/xampp-osx-7.4.27-2-installer.dmg)
- Setup XAMPP
- open XAMPP as administrator
- start Apache, Mysql
- Click On Mysql-Admin (phpmyadmin will open in your browser.)
- now make a database with name `test`
> Paste
```
CREATE TABLE persons (
 userid int(11) NOT NULL,
 role varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 username varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 credits int(11) DEFAULT NULL,
 time int(11) DEFAULT NULL,
 UNIQUE KEY userid (userid),
 UNIQUE KEY username (username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

```
- After success go to your xampp installed location 
> For Windows `C:\xampp` 
- Download This Project files
- Go to [@Botfather](https://t.me/botfather) and make a new bot and copy bot token (Looks Like `123456789:abcdefghijklmnopqrstuvwxyz`)
- Download This Project files As Zip and Unzip in on htdocs of your xampp folder.
- open index.php and edit `<Bottoken>` as your bot token (Example `123456789:abcdefghijklmnopqrstuvwxyz`)
- now save it 
* Make Sure This Projects Files in your XAMPP/htdocs folder*
- open XAMPP as administrator
- start Apache, Mysql
- Download [ngrok.com](https://ngrok.com/download) Add your authtoken
- open ngrok and type `ngrok http https://localhost` 
- Copy https url (looks like `https://anything.ngrok.io`)
> Webhook Url: `https://www.example.com/<bottoken>/setwebhook?url=<ngrok_url>&drop_pending_updates=True
- replace `bottoken` and `ngrok_url` with your bottoken and ngrok_url
- NOW START YOUR BOT


## VIDEO TUTORIAL 

- **SOON**


## Authors

- [@r0ld3x](https://www.github.com/r0ld3x)

## Support Me
**<a href="https://www.buymeacoffee.com/r0ld3x" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-blue.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" ></a>**

**UPI**: <code>roldex.fam@idfcbank</code> <br>
**Paypal**: <a href="https://paypal.me/r0ld3x">Click</a> <br>
**BTC**: <code>35t9HaAV35HbkjZXtbZ66fdo3LLMp79CyD</code> <br>
**ETH**: <code>0x70550046d712c677d70cB6eEb247F72A5b8fD844</code> <br>


## Where You Can Find Me
- <a href="https://t.me/r0ld3x" target = "_blank"><img height="20"  alt="Roldex's Telegram" width="22px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/telegram.svg"></img> Telegram</a><br>
- <a href="https://instagram.com/r0ld3x" target = "_blank"><img height="20"  alt="Roldex's Instagram" width="22px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/instagram.svg"></img> Instagram</a> <br>
- <a href="https://github.com/r0ld3x" target = "_blank"><img height="20"  alt="Roldex's Github" width="22px" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/github.svg"></img> Github</a> <br>
- <a href="https://www.youtube.com/channel/UC8FCA9c4r_IKbVTRBbedTuQ" target = "_blank"><img  alt="Roldex's Youtube" width="22px" height="20" src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/youtube.svg"></img> Youtube</a> <br>

## Made With 
- [PHP](https://www.php.net/)
- [MYSQL](https://www.mysql.com/)
- [BRAIN](https://t.me/r0ld3x) :brain:
- [TELEGRAM BOT API](https://core.telegram.org/bots/api)


## LICENSE
[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)


## License

[MIT](https://choosealicense.com/licenses/mit/)

