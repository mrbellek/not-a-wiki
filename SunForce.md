---
layout: default
---

###### ![](/realm/img/picks/TopPageUpgrade.png "Sun Force")

###### Sun Force

Obtained by excavating both the Dawnstone and Duskstone lore artifacts. It has different effects depending on the time of day.

![](/realm/img/picks/DawnstoneArtifact.png "Dawnstone") **Dawnstone**

**Description**: Only found during sunrise hours. Emits a faint glow.

**Rewards**: With Both the Dawnstone and Duskstone artifact, awards the Sun Force upgrade, which grants different effects based on time of the day.

**Requirement**: Excavate between 5:00am and 8:00am (Local Time)

**Chance**: (Excavation count / 10,000)%

![](/realm/img/picks/DuskstoneArtifact.png "Duskstone") **Duskstone**

**Description**: Only found during sunset hours. Absorbs light in a small radius.

**Rewards**: With Both the Duskstone and Dawnstone artifacts, awards the Sun Force upgrade, which grants different effects based on time of the day. See details.

**Requirement**: Excavate between 6:00pm and 9:00pm (Local Time)

**Chance**: (Excavation count / 10,000)%

###### Sun Force

**Note**: All times are based on UTC time.

**Note**: Current 

<a style="text-decoration: none" class="clock24" id="tz24-1509892643-tzutc-eyJob3VydHlwZSI6MTIsInNob3dkYXRlIjoiMCIsInNob3dzZWNvbmRzIjoiMSIsInNob3d0aW1lem9uZSI6IjEiLCJ0eXBlIjoiZCIsImxhbmciOiJlbiJ9">UTC Time</a><script src="//w.24timezones.com/l.js" async></script>

![](/realm/img/picks/SunForce12am6am.png "SunForce12pm6pm") **<span style="color: red">12 AM - 6 AM</span>**

**Effect**: Gain additional assistants based on the amount of Gems you own.

**Formula**: floor(ln(1+x) ^ 1.35).

![](/realm/img/picks/SunForce6am12pm.png "SunForce12pm6pm") **<span style="color: red">6 AM - 12 PM</span>**

**Effect**: Multipicatively increase Faction Coin find chance based on the amount of assistants you own.

**Formula**: floor(0.25 * X ^ (0.4 + 0.05 * A), where x is your assistants stat and A is Ascension count.

![](/realm/img/picks/SunForce12pm6pm.png "SunForce12pm6pm") **<span style="color: red">12 PM - 6 PM</span>**

**Effect**: Increase the production of all buildings based on the amount of Faction Coins you collected in this game.

**Formula**: log(1 + x) ^ (3 + 3  * A), where x is your total faction coins stat and A is Ascension count.

![](/realm/img/picks/SunForce6pm12am.png "SunForce6pm12am") **<span style="color: red">6 PM - 12 AM</span>**

**Effect**: Increase offline production based on the amount of buildings you own.

**Formula**: 10 * x ^ (0.85 + 0.15 * A), where x is the number of buildings you own and A is Ascension count.
