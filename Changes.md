---
layout: default
---
###### All Changes and Additions

###### Release date, February 5, 2018

**Excavation**

**Excavations**: Free reset if enough times excavated this R 2000 + 50 * R + 500 * x, where x is amount of resets this R

**Trophies**

**[Trophy Map Page](/realm/TrophyPage/)**

**Moved 13 Trophies**

Research associated 'Secret Trophies' moved to 'Misc Trophies'

**Added**  2 Secret Trophies

![](/realm/assets/img/picks/HolyFrenzySecretTrophy.png) **Holy Frenzy**

**Requirement**: In a single reincarnation, have a 3 day combined activity time of Holy Light and Blood Frenzy.

**Effect**: While Blood Frenzy or Holy Light are active, increase the production of all buildings.

**Formula**: (50 * T ^ 2)

**Note**: Upgrade scales from Holy Light/Blood Frenzy tiers.

**Cost**: 100 Dc (1e35)

---

![](/realm/assets/img/picks/UniformitySecretTrophy.png) **Uniformity**

**Requirement**: With no less than 3 days of playtime, have less than 1 minute of playtime difference for Order, Chaos and Balance alignments.

**Effect**: Increases production of all buildings based on time spent as least used alignment.

**Formula**: 0.7 * min(x ,y, z. s, t ,u) ^ 0.7, where x is neutral time, y is good time, z is evil time, s is balance time, t is chaos time, u is order time (All this R in seconds).

**Cost**: 100 Qid (1e50)

---

&nbsp;

**[Artifacts Page](/realm/Artifacts/)**

**Added**: 10 Artifacts, 9 that unlock Faction Sets

**Changed**: 1 Artifact

![](/realm/assets/img/picks/WallChunckArtifact.png "Wall Chunck") **Wall Chunk**

**Description**: A bigger piece of the infamous Ascension Wall.

**Requirements**: R100+

**Chance**: 10%

**Effect**: Increase the production of all buildings based on their tier.

**Cost**: 1 Sx (1e21) Emerald Coins

**New Formula**: 30000 * (11-x) ^ 3.5, where x is building tier.

**Old Formula**: 100000 * (11-x) ^ 3, where x is building tier.

&nbsp;

**Added**: 10 Artifacts, 9 that unlock Faction Sets

![](/realm/assets/img/picks/AncestralHourglassArtifact.png) **Ancestral Hourglass**

**Description**: The silver sands contained within seem to never stop flowing.

**Requirement**: R100+

**Effect**: Lower cost of Lineage level based on time spent this game.FC cost is reset when you purchase a new lineage level.

**Formula**: ((x / 3600) ^ (1 - 0.01 * ((y ^ 1.01) - z / 5) / 10) where x is seconds this game/since lineage bought, y is lineage level and z is reincarnations

**Lineage Cost Formula**: (25 * 10 ^ (15 + level - hourglass.formula)) ^ 0.9 if ancient heirloom

**Secret Upgrade Cost**: 1 Novg (1e90) Emerald Coins

**Chance:**: (x / 10000000000000000 (10 QA))%, where x is FC chance.

---

![](/realm/assets/img/picks/SilkClothArtifact.png) **Silk Cloth**

**Description**: The purest silk made for Fairies, by Fairies, of Fairies.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Fairy Set.

**Chance**: (x - 10000) / 200000)%, where x is Wizard Tower.

![](/realm/assets/img/picks/FairySet.png) **Fairy Set**

**Requirement**: A2+

**Artifacts Required**: Silk Cloth, Pink Carrot, Bottled Voice

**Cost**: Free

**Effect**: Increase Farm, Inn and Blacksmith production based on number of assistants owned.

**Formula**: (0.75 * x ^ 0.75), where x is number of assistants owned.

---

![](/realm/assets/img/picks/RawEmeraldArtifact.png) **Raw Emerald**

**Description**: Just slightly less precious than a raw Ruby.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Elven Set.

**Chance**: ((2 * x ^ 2) / 10000)%, where x is non-ruby excavation resets (this game).

![](/realm/assets/img/picks/ElvenSet.png) **Elven Set**

**Requirement**: A2+

**Artifacts Required**: Raw Emerald, Lucky Clover, Mini-treasure

**Cost**: Free

**Effect**: Increase all building production based on total amount of Elven Lucks triggered (This R)(since unlock).

**Formula**: (0.66 * x ^ 0.6), where x is amount of Elven Lucks triggered.

---

![](/realm/assets/img/picks/FossilizedWingArtifact.png) **Fossilized Wing**

**Description**: The remains of an Angel fallen to earth.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Angel Set.

**Chance**: (x / 25920000 (300 days))%, where x is angel time (all game) in seconds.

![](/realm/assets/img/picks/AngelSet.png) **Angel Set**

**Requirement**: A2+

**Artifacts Required**: Fossilized Wing, Pillar Fragment, DivineSword

**Cost**: Free

**Effect**: Increase mana regen based on spells cast this game.

**Formula**: (0.32 * x ^ 0.32), where x is spells cast.

---

![](/realm/assets/img/picks/SpikedWhipArtifact.png) **Spiked Whip**

**Description**: Use with caution. You do not want to exterminate all your slaves.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Goblin Set.

**Chance**: (x - 10000) / 300000)%, where x is Slave Pens.

![](/realm/assets/img/picks/GoblinSet.png) **Goblin Set**

**Requirement**: A2+

**Artifacts Required**: Spiked Whip, Ancient Coin Piece, Goblin Purse

**Cost**: Free

**Effect**: Multiplicatively increase gathered faction coins based on time spent this game if they don't match faction or bloodline.

**Formula**: (x ^ 0.7), where x is seconds.

---

![](/realm/assets/img/picks/DustyCoffinArtifact.png) **DustyCoffin**

**Description**: Sealed since forever, yet you can hear a strange noise from within.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Undead Set.

**Chance**: ((1 / (30 + x ^ 1.75))%, where x is time this game in seconds.

**Chance**: 1 in 3000 in 0 seconds 1 in 132349 at 60 seconds. 1 in 438078 at 120 seconds.

![](/realm/assets/img/picks/UndeadSet.png) **Undead Set**

**Requirement**: A2+

**Artifacts Required**: DustyCoffin Spiked Whip, Rotten Organ, JawBone

**Cost**: Free

**Effect**: Additively Increase max mana based on offline bonus.

**Formula**: (45 * x ^ 0.6), where x is offline Multiplier.

---

![](/realm/assets/img/picks/CrystallizedLavaArtifact.png) **CrystallizedLava**

**Description**: Incandescent but still. Can be used efficiently as a desk lamp.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Demon Set.

**Chance**: (x - 10000) / 200000)%, where x is Hall of  Legends.

![](/realm/assets/img/picks/DemonSet.png) **Demon Set**

**Requirement**: A2+

**Artifacts Required**: CrystallizedLava, Demonic Figurine, Demon Horn

**Cost**: Free

**Effect**: Increase non unique building production based on the sum of your faction spells activity time.

**Formula**: (0.25 * x ^ 0.75), where x is faction spell activity time.

---

![](/realm/assets/img/picks/TitanHelmetArtifact.png) **Titan Helmet**

**Description**: Made of enough metal to craft a human-sized full plate.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Titan Set.

**Chance**: ((x ^ 2) / 5000000000 (5B))%, where x is Royal Exchanges.

![](/realm/assets/img/picks/TitanSet.png) **Titan Set**

**Requirement**: A2+

**Artifacts Required**: Titan Helmet, Huge Titan Statue, Titan Shield

**Cost**: Free

**Effect**: Increase Unique building production based on time spent this game.

**Formula**: (0.07 * x ^ 0.7), where x is seconds.

---

![](/realm/assets/img/picks/BranchoftheLifeTreeArtifact.png) **Branch of the Life Tree**

**Description**: Despite being torn from its source tree, it keeps growing buds and leaves.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Druid Set.

**Chance**: (x ^ 3) / 2000000 (2M))%, where x is level of current lineage.

![](/realm/assets/img/picks/DruidSet.png) **Druid Set**

**Requirement**: A2+

**Artifacts Required**: Branch of the Life Tree, Glyph Table, Stone Of Balance

**Cost**: Free

**Effect**: Increase production of all buildings based on their quantity.

**Formula**: (0.65 * x ^ 0.65), where x is building count.

---

![](/realm/assets/img/picks/NightmareFigmentArtifact.png) **Nightmare Figment**

**Description**: An unshaped, ephemeral substance which is politely trying to corrupt your mind.

**Requirement**: A2+, 3000+ Excavations

**Effect**: Unlocks Faceless Set.

**Chance**: (x ^ 1.5 / 20000000 (20M))%, where x is headstart time in seconds.

![](/realm/assets/img/picks/FacelessSet.png) **Faceless Set**

**Requirement**: A2+

**Artifacts Required**: Nightmare Figment, Translucent Goo, Octopus-shaped Helmet

**Cost**: Free

**Effect**: Increase production of all buildings based on highest amount of spells cast in a single game.

**Formula**: (0.32 * x ^ 0.32), where x is number of spells cast.

---

&nbsp;

**[Lineage Page](/realm/Lineages/)**

**Added**: Level 30 Lineage Perks

**Fairy Level 30**

**Requirement**: R105+

**Effect**: When Fairy Chanting is active, increase assistant amount by 10% every 5 minutes of its duration.

**Formula**: 10 * Floor (x/300), where x is Fairy Chanting duration in seconds. 

&nbsp;

**Elven Level 30**

**Requirement**: R105+

**Effect**: When Moon Blessing is active, multiply your fc chance by 500%.

&nbsp;

**Angel Level 30**

**Requirement**: R105+

**Effect**: When God's Hand is active, increase max mana by 100%.

&nbsp;

**Goblin Level 30**

**Requirement**: R105+

**Effect**: When Goblin's Greed is active, increase seconds worth of Tax Collections based on assistants owned. 

**Formula**: (0.45 * x ^ 0.45), where x is assistants owned.

&nbsp;

**Undead Level 30**

**Requirement**: R105+

**Effect**: When offline, Night Time production is added to offline bonus. Night Time activity time counts 100% more for all purposes.

&nbsp;

**Demon Level 30**

**Requirement**: R105+

**Effect**: Non-Unique Uuildings except Hall of Legends are also targeted by Hellfire Blast.

&nbsp;

**Titan Level 30**

**Requirement**: R105+

**Effect**: Lightning Strike always hits Unique Buildings in addition to its random target. Unique Buildings are no longer random targets.

&nbsp;

**Druid Level 30**

**Requirement**: R105+

**Effect**: Increase Grand Balance duration based on assistants owned. Also increase the  production of all buildings while Grand Balance is active by 10% every 5 minutes of its duration.

**Duration Formula**: (0.5 * x ^ 0.5), where x is assistants owned.

&nbsp;

**Faceless Level 30**

**Requirement**: R105+

**Effect**: Brainwave headstart time is increased by 1000%.

&nbsp;

**Dwarf Level 30**

**Requirement**: R105+

**Effect**: When Diamond Pickaxe is active, increase mana regen based on Faction Coin chance. 

**Formula**: (0 .5 * log(x + 1) ^ 2.5), where x is Faction Coin chance.

&nbsp;

**Drow Level 30**

**Requirement**: R105+

**Effect**: Combo Strike's combo bonus increases by 5% per 30 seconds spent this game.

&nbsp;

**Dragon Level 30**

**Requirement**: R105+

**Effect**: Activates two breaths per cast.

---

**[A2 Page](/realm/Ascension2/)**

**Changed** All Creation, and Elf Union Upgrade 

**Added** 2 new Union upgrades for each faction

&nbsp;

![](/realm/assets/img/picks/AllCreation.png "All Creation")

**Cost**: 6000 Mana

**Effect**: Increase production of all buildings based on mana regeneration rate.

**Effect**: Also multipicatively increase Faction Coin find chance based on your mana regeneration rate.

**New Formula**: floor(2.5 * x ^ 0.44). where x is mana per second.

**Old Formula**: floor(2.5 * x ^ 0.5). where x is mana per second.

&nbsp;

![](/realm/assets/img/picks/WoodenDices.png "Wooden Dices") **Wooden Dice**

**Cost**: 1 Nod (1e60) Emerald Coins

**Requirement**: Elven Union

**Effect**: Increase Elven Luck chance to activate and its effects based on the amount of Arboreal Cities you own.

**Elven Luck Formula**: X ^ 0.3, where x is Arboreal Cities count.

**New Production Formula**: (7 * x ^ 0.7), where x is Arboreal Cities count.

**Old Production Formula**: (6 * x ^ 0.6), where x is Arboreal Cities count.

**New Faction Coin Formula**: (1.5 * x ^ 0.7), where x is Arboreal Cities count.

**Old Faction Coin Formula**: (x ^ 0.7), where x is Arboreal Cities count.

&nbsp;

**Angel**

![](/realm/assets/img/picks/Heaven'sBrilliance.png "Heaven's Brilliance") **Heaven's Brilliance**

**Cost**: 1 Nod (1e60) Emerald Coins

**Requirement**: Angels Union

**Effect**: Increase the bonus multiplier for all spells at tier 7 and above based on the amount od Holy Sites you own. All Dragon's Breath effects are increased based on the amount of Holy Sites you own. 

**Formula**: (0.6 * x^0.6), where x is amount of Holy Sites owned.

&nbsp;

![](/realm/assets/img/picks/AngelicFortitude.png "Angelic Fortitude") **Angelic Fortitude**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Angels Union

**Effect**: Increase the production of all buildings based on the sum of all your spells' activity time

**Formula**: 0.03 * x ^ 0.6, where x is seconds in faction spells

&nbsp;

![](/realm/assets/img/picks/SeraphimFeathers.png "Seraphim Feathers") **Seraphim Feathers**

**Cost**: 10 Dtg (1e00) Emerald Coins

**Requirement**: Angels Union

**Effect**: Increase mana regeneration by 60%.

&nbsp;

**Undead**

![](/realm/assets/img/picks/ZombieApocalypse.png "Zombie Apocalypse") **Zombie Apocalypse**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Undead Union

**Effect**: Gain assistants based on the total amount of time spent offline. (This R)

**Formula**: (0.7 * x ^ 0.7)

&nbsp;

![](/realm/assets/img/picks/EternalServitude.png "Eternal Servitude") **Eternal Servitude**

**Cost**: 10 Dtg (1e00) Emerald Coins

**Requirement**: Undead Union

**Effect**: Increase base production of Undercity by +10000, then increase this effect based on time spent this game. 

**Formula**: 10000 + (x / 1800) ^ 2.72, where x is seconds

&nbsp;

**Titan**

![](/realm/assets/img/picks/TitanicAuthority.png "Titanic Authority") **Titanic Authority**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Titan Union

**Effect**: Increase the production of Unique Buildings based on the amount of Royal Exchanges you made.

**Formula**: (0.7 * x ^ 0.7)

&nbsp;

![](/realm/assets/img/picks/ColossusKingdom.png "Colossus Kingdom") **Colossus Kingdom**

**Cost**: 10 Dtg (1e00) Emerald Coins

**Requirement**: Titan Union

**Effect**: Gain assistants based on total time spent as Order.

**Formula**: (x ^ 0.7)

&nbsp;

**Fairy**

![](/realm/assets/img/picks/Pheromones.png "Pheromones") **Pheromones**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Fairies Union

**Effect**: Gain assistants based on time spent affiliated with Fairies. (All time)

**Formula**: (0.7 * x ^ 0.7)

&nbsp;

![](/realm/assets/img/picks/DreamCatchers.png "Dream Catchers") **Dream Catchers**

**Cost**: 10 Dtg (1e00) Emerald Coins

**Requirement**: Fairies Union

**Effect**: Every 30 minutes, multipicatively increase mana regen by a random amount. (starts at 0% on a new run)

&nbsp;

**Demon**

![](/realm/assets/img/picks/DemonicFury.png "Demonic Fury") **Demonic Fury**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Demons Union

**Effect**: Increase production of all buildings based on least time spent between Evil and Chaos this R.

**Formula**: (0.12 * min(x, y) ^ 0.7, where x is evil time in seconds and y is chaos time in seconds.

&nbsp;

![](/realm/assets/img/picks/Devastation.png "Devastation") **Devastation**

**Cost**: 10 Dtg (1e00) Emerald Coins

**Requirement**: Demons Union

**Effect**: Increase the production of Non-Unique buildings based on Hellfire Blast activity time.

**Formula**: (0.3 * x ^ 0.65), where x is Hellfire Blast activity time.

&nbsp;

**Faceless**

![](/realm/assets/img/picks/ForbiddenLanguage.png "Forbidden Language") **Forbidden Language**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Faceless Union

**Effect**: Increase spell durations based on the amount of Reincarnations made.

**Formula**: X???????????

&nbsp;

![](/realm/assets/img/picks/DimensionDoor.png "Dimension Door") **Dimension Door**

**Cost**: 10 Dtg (1e100) Emerald Coins

**Requirement**: Faceless Union

**Effect**: Increase Unique Building production based on highest max mana this reincarnation 

**Formula**: (0.007 * x ^ 0.7), where x is highest max mana this R.

&nbsp;

**Elven**

![](/realm/assets/img/picks/Camouflage.png "Camouflage") **Camouflage**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Elven Union

**Effect**: Assistants count 1000% more for all purposes and increase assistant production based on assistant amount.

**Formula**: (0.68 * x ^ 0.68)

**Note**: Only works on upgrades that check assistant count

&nbsp;

![](/realm/assets/img/picks/ElvenDiscipline.png "Elven Discipline") **Elven Discipline**

**Cost**: 10 Dtg (1e100) Emerald Coins

**Requirement**: Elven Union

**Effect**: Increase mana regeneration based on the amount of Faction Coins found in this game.

**Formula**:  (ln(x))

&nbsp;

**Goblin**

![](/realm/assets/img/picks/MoneyisMagic.png "Money is Magic") **Money is Magic**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Goblins Union

**Effect**: Increase mana regeneration based on the amount of Tax Collections cast in this game.

**Formula**: (2 * (ln(x) ^ 1.2)), where x is amount of Tax Collections cast.

&nbsp;

![](/realm/assets/img/picks/LousyArchitecture.png "Lousy Architecture") **Lousy Architecture**

**Cost**: 10 Dtg (1e100) Emerald Coins

**Requirement**: Goblins Union

**Effect**: Reduce cost multiplier of NU buildings.

**Formula**: (-0.02)

&nbsp;

**Druid**

![](/realm/assets/img/picks/LunarCycle.png "Lunar Cycle") **Lunar Cycle**

**Cost**: 10 Spvg (1e85) Emerald Coins

**Requirement**: Druids Union

**Effect**: Increase the production of all buildings based on the difference between time spent online and offline in this game. Maximum bonus is granted for the smallest difference.

**Formula**: (x + y) ^ 0.65) * (1 / abs(x - y) ^ 0.25) ^ 0.7), where x is online time in seconds and y is offline time in seconds.

&nbsp;

![](/realm/assets/img/picks/GroveFarming.png "Grove Farming") **Grove Farming**

**Cost**: 10 Dtg (1e100) Emerald Coins

**Requirement**: Druids Union

**Effect**: Increase the production of all buildings based on their tier. Lower tiers get better bonuses.

**Formula**: (10 * (11 - T) ^ 3)

