<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientsJson = '[
            {
              "Id": "5d2713f34d19e39d7add6fe2",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Harriett",
              "LastName": "Stokes",
              "DateOfBirth": "Sun Apr 21 1991 05:37:04 GMT+0000 (UTC)",
              "Email": "harriett.stokes@somecompany.me",
              "Phones": [
                "+1 (998) 482-3540"
              ],
              "Address": "248 Chester Avenue, Ventress, West Virginia, 8147",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Mon Nov 18 2024 13:03:51 GMT+0000 (UTC)",
              "Balance": "1410.80"
            },
            {
              "Id": "5d2713f3dbf6d083150d635c",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Tyson",
              "LastName": "West",
              "DateOfBirth": "Wed Oct 27 2004 22:52:45 GMT+0000 (UTC)",
              "Email": "tyson.west@somecompany.net",
              "Phones": [
                "+1 (904) 599-2400"
              ],
              "Address": "935 Nova Court, Alfarata, Nebraska, 3237",
              "SubscriptionId": "5d2712b81b37d8d1088ca8ab",
              "ExpirationDate": "Mon Jul 15 2024 20:14:11 GMT+0000 (UTC)",
              "Balance": "1524.95"
            },
            {
              "Id": "5d2713f3e845f66c6c913bf0",
              "IsActive": false,
              "Gender": "female",
              "FirstName": "Garner",
              "LastName": "Blanchard",
              "DateOfBirth": "Fri Jun 15 2001 10:59:58 GMT+0000 (UTC)",
              "Email": "garner.blanchard@somecompany.ca",
              "Phones": [
                "+1 (978) 411-2049",
                "+1 (934) 505-2190",
                "+1 (897) 464-3764"
              ],
              "Address": "835 Grand Street, Juarez, Rhode Island, 2554",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Sun Sep 15 2024 23:32:54 GMT+0000 (UTC)",
              "Balance": "3323.54"
            },
            {
              "Id": "5d2713f35125cba9a55f7b24",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Mueller",
              "LastName": "Savage",
              "DateOfBirth": "Thu Nov 02 1995 19:01:53 GMT+0000 (UTC)",
              "Email": "mueller.savage@somecompany.tv",
              "Phones": [
                "+1 (994) 435-3645"
              ],
              "Address": "891 Whitty Lane, Fidelis, Maryland, 4339",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Sat Mar 14 2020 19:34:41 GMT+0000 (UTC)",
              "Balance": "1374.76"
            },
            {
              "Id": "5d2713f369bc895191a2347a",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "Patel",
              "LastName": "Everett",
              "DateOfBirth": "Sat Apr 29 2000 00:20:33 GMT+0000 (UTC)",
              "Email": "patel.everett@somecompany.name",
              "Phones": [
                "+1 (859) 474-2362",
                "+1 (872) 408-3923"
              ],
              "Address": "192 Kensington Street, Levant, Maine, 9124",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Sun Sep 20 2020 11:54:58 GMT+0000 (UTC)",
              "Balance": "1281.56"
            },
            {
              "Id": "5d2713f34544bd78b9d83e3c",
              "IsActive": false,
              "Gender": "female",
              "FirstName": "Alice",
              "LastName": "Stark",
              "DateOfBirth": "Mon Sep 07 1987 22:33:33 GMT+0000 (UTC)",
              "Email": "alice.stark@somecompany.com",
              "Phones": [
                "+1 (927) 531-2053",
                "+1 (801) 404-2643",
                "+1 (972) 549-2951",
                "+1 (811) 478-2889"
              ],
              "Address": "606 Cleveland Street, Brutus, New York, 2135",
              "SubscriptionId": "5d2712b81b37d8d1088ca8ab",
              "ExpirationDate": "Tue Apr 04 2023 22:09:26 GMT+0000 (UTC)",
              "Balance": "2226.51"
            },
            {
              "Id": "5d2713f39b53599101188e18",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Gardner",
              "LastName": "Berger",
              "DateOfBirth": "Tue Aug 17 1993 22:30:22 GMT+0000 (UTC)",
              "Email": "gardner.berger@somecompany.biz",
              "Phones": [
                "+1 (967) 456-2955",
                "+1 (805) 540-2128",
                "+1 (908) 584-3747"
              ],
              "Address": "781 Cameron Court, Alleghenyville, Idaho, 465",
              "SubscriptionId": "5d2712b81b37d8d1088ca8ab",
              "ExpirationDate": "Fri May 10 2024 02:55:40 GMT+0000 (UTC)",
              "Balance": "3065.47"
            },
            {
              "Id": "5d2713f34dae39d4f5567108",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Leticia",
              "LastName": "Beard",
              "DateOfBirth": "Tue Jul 04 2000 13:23:51 GMT+0000 (UTC)",
              "Email": "leticia.beard@somecompany.biz",
              "Phones": [
                "+1 (946) 531-3805",
                "+1 (805) 436-2676",
                "+1 (898) 577-2383"
              ],
              "Address": "147 Etna Street, Day, Utah, 5413",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Thu Jan 11 2024 12:00:49 GMT+0000 (UTC)",
              "Balance": "3882.04"
            },
            {
              "Id": "5d2713f3461a73164fa886a9",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Ivy",
              "LastName": "York",
              "DateOfBirth": "Thu Dec 31 1992 14:42:05 GMT+0000 (UTC)",
              "Email": "ivy.york@somecompany.info",
              "Phones": [
                "+1 (873) 401-3098",
                "+1 (806) 549-3102",
                "+1 (852) 527-2514"
              ],
              "Address": "122 Troy Avenue, Walland, Colorado, 7442",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Mon Jan 04 2021 07:54:31 GMT+0000 (UTC)",
              "Balance": "1571.48"
            },
            {
              "Id": "5d2713f3f62f2852ef41852c",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "James",
              "LastName": "Perkins",
              "DateOfBirth": "Tue Feb 20 2001 04:27:28 GMT+0000 (UTC)",
              "Email": "james.perkins@somecompany.us",
              "Phones": [
                "+1 (908) 547-2510",
                "+1 (988) 415-2879",
                "+1 (920) 450-3095"
              ],
              "Address": "182 Remsen Street, Jugtown, Wisconsin, 6806",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Thu May 28 2020 18:10:40 GMT+0000 (UTC)",
              "Balance": "3677.82"
            },
            {
              "Id": "5d2713f307c9f50d1a7b5c6f",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Hanson",
              "LastName": "Wheeler",
              "DateOfBirth": "Sat Oct 30 1999 09:11:54 GMT+0000 (UTC)",
              "Email": "hanson.wheeler@somecompany.co.uk",
              "Phones": [
                "+1 (899) 506-3630",
                "+1 (847) 423-3646",
                "+1 (947) 411-3957"
              ],
              "Address": "544 Richards Street, Wheatfields, Pennsylvania, 2441",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Mon Jul 29 2024 09:45:26 GMT+0000 (UTC)",
              "Balance": "3115.92"
            },
            {
              "Id": "5d2713f3bbd135c155da5676",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Tammi",
              "LastName": "Wilkerson",
              "DateOfBirth": "Sat May 07 2011 22:49:34 GMT+0000 (UTC)",
              "Email": "tammi.wilkerson@somecompany.org",
              "Phones": [
                "+1 (881) 412-2183"
              ],
              "Address": "184 Tennis Court, Frystown, Palau, 4314",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Mon Sep 27 2021 13:24:10 GMT+0000 (UTC)",
              "Balance": "3194.03"
            },
            {
              "Id": "5d2713f3e22b8e9a0611bfa5",
              "IsActive": false,
              "Gender": "female",
              "FirstName": "Bartlett",
              "LastName": "Moreno",
              "DateOfBirth": "Wed Jun 09 2010 13:19:13 GMT+0000 (UTC)",
              "Email": "bartlett.moreno@somecompany.me",
              "Phones": [
                "+1 (962) 474-3523",
                "+1 (914) 554-3885",
                "+1 (824) 585-3970",
                "+1 (899) 424-3618"
              ],
              "Address": "555 Lincoln Terrace, Chesapeake, Tennessee, 9495",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Fri Mar 03 2023 13:30:19 GMT+0000 (UTC)",
              "Balance": "3998.92"
            },
            {
              "Id": "5d2713f3a660588b18e734e4",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Hernandez",
              "LastName": "Sanchez",
              "DateOfBirth": "Mon Oct 26 1987 11:09:00 GMT+0000 (UTC)",
              "Email": "hernandez.sanchez@somecompany.net",
              "Phones": [
                "+1 (958) 415-3591",
                "+1 (941) 523-3704",
                "+1 (857) 554-2737"
              ],
              "Address": "392 Emerson Place, Edinburg, Arkansas, 2542",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Tue Dec 26 2023 16:37:08 GMT+0000 (UTC)",
              "Balance": "1781.46"
            },
            {
              "Id": "5d2713f39c022e48eded6f6b",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Cameron",
              "LastName": "Pope",
              "DateOfBirth": "Mon Apr 11 1988 04:55:59 GMT+0000 (UTC)",
              "Email": "cameron.pope@somecompany.ca",
              "Phones": [
                "+1 (839) 592-3409",
                "+1 (815) 568-2401",
                "+1 (887) 583-3871"
              ],
              "Address": "153 Kossuth Place, Wyano, Kentucky, 5469",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Wed May 13 2020 09:33:08 GMT+0000 (UTC)",
              "Balance": "2904.51"
            },
            {
              "Id": "5d2713f30ebdcf13986dce7b",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Pugh",
              "LastName": "Sanders",
              "DateOfBirth": "Mon Feb 20 2012 05:38:15 GMT+0000 (UTC)",
              "Email": "pugh.sanders@somecompany.tv",
              "Phones": [
                "+1 (851) 573-3911",
                "+1 (904) 444-2374",
                "+1 (860) 469-2535",
                "+1 (855) 415-2929"
              ],
              "Address": "535 Hicks Street, Englevale, Oregon, 8882",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Sun Sep 22 2024 14:08:25 GMT+0000 (UTC)",
              "Balance": "1990.83"
            },
            {
              "Id": "5d2713f3dcc4338042b7e0f8",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Colon",
              "LastName": "Crane",
              "DateOfBirth": "Thu Jan 23 1997 11:31:11 GMT+0000 (UTC)",
              "Email": "colon.crane@somecompany.name",
              "Phones": [
                "+1 (817) 532-2173",
                "+1 (918) 441-2879",
                "+1 (855) 597-3136"
              ],
              "Address": "425 Fleet Walk, Moscow, Alabama, 6664",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Sun Jul 25 2021 14:52:18 GMT+0000 (UTC)",
              "Balance": "3716.73"
            },
            {
              "Id": "5d2713f3abb6f390a168de3c",
              "IsActive": false,
              "Gender": "female",
              "FirstName": "Short",
              "LastName": "Marquez",
              "DateOfBirth": "Mon Dec 17 1984 01:49:01 GMT+0000 (UTC)",
              "Email": "short.marquez@somecompany.com",
              "Phones": [
                "+1 (990) 500-2265",
                "+1 (965) 510-3454"
              ],
              "Address": "664 Dobbin Street, Lorraine, Hawaii, 5657",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Fri Jan 12 2024 22:18:50 GMT+0000 (UTC)",
              "Balance": "1963.59"
            },
            {
              "Id": "5d2713f35e497d035c60d4da",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Sherman",
              "LastName": "Stephens",
              "DateOfBirth": "Mon Nov 17 1986 02:31:59 GMT+0000 (UTC)",
              "Email": "sherman.stephens@somecompany.biz",
              "Phones": [
                "+1 (999) 401-3539"
              ],
              "Address": "435 Rock Street, Loretto, Florida, 8960",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Fri May 07 2021 19:55:32 GMT+0000 (UTC)",
              "Balance": "1543.04"
            },
            {
              "Id": "5d2713f3fc187d842df70fa0",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "Santos",
              "LastName": "Sweeney",
              "DateOfBirth": "Tue May 15 2007 09:05:47 GMT+0000 (UTC)",
              "Email": "santos.sweeney@somecompany.biz",
              "Phones": [
                "+1 (958) 511-2097",
                "+1 (936) 456-3985",
                "+1 (963) 408-3914",
                "+1 (957) 579-2946"
              ],
              "Address": "474 Vernon Avenue, Fairfield, Marshall Islands, 2001",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Wed Mar 01 2023 08:47:29 GMT+0000 (UTC)",
              "Balance": "1334.54"
            },
            {
              "Id": "5d2713f3735494f43a9851f3",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Charlotte",
              "LastName": "Hamilton",
              "DateOfBirth": "Mon Nov 04 2002 23:35:35 GMT+0000 (UTC)",
              "Email": "charlotte.hamilton@somecompany.info",
              "Phones": [
                "+1 (805) 441-2995",
                "+1 (949) 552-3122",
                "+1 (824) 589-2605"
              ],
              "Address": "525 Bancroft Place, Rushford, Washington, 1761",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Thu Oct 19 2023 20:17:52 GMT+0000 (UTC)",
              "Balance": "2820.67"
            },
            {
              "Id": "5d2713f33f59962e5870be23",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Morse",
              "LastName": "Meyers",
              "DateOfBirth": "Mon Apr 02 1990 07:50:32 GMT+0000 (UTC)",
              "Email": "morse.meyers@somecompany.us",
              "Phones": [
                "+1 (813) 444-3371",
                "+1 (895) 476-2595",
                "+1 (831) 509-2250"
              ],
              "Address": "620 Crescent Street, Sussex, North Dakota, 2656",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Sat Oct 30 2021 12:25:16 GMT+0000 (UTC)",
              "Balance": "2393.94"
            },
            {
              "Id": "5d2713f351ba399ee6ccbbf7",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Dianna",
              "LastName": "Mack",
              "DateOfBirth": "Fri Oct 16 1992 02:36:58 GMT+0000 (UTC)",
              "Email": "dianna.mack@somecompany.co.uk",
              "Phones": [
                "+1 (865) 508-2333",
                "+1 (955) 546-3185",
                "+1 (945) 456-2757"
              ],
              "Address": "783 Pershing Loop, Northridge, Kansas, 707",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Mon Apr 12 2021 12:35:43 GMT+0000 (UTC)",
              "Balance": "3214.05"
            },
            {
              "Id": "5d2713f39e2621361aa1237b",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Cote",
              "LastName": "Mccullough",
              "DateOfBirth": "Thu Dec 23 1982 04:26:08 GMT+0000 (UTC)",
              "Email": "cote.mccullough@somecompany.org",
              "Phones": [
                "+1 (991) 422-2740"
              ],
              "Address": "118 Front Street, Hiwasse, Oklahoma, 5589",
              "SubscriptionId": "5d2712b81b37d8d1088ca8ab",
              "ExpirationDate": "Fri Mar 22 2024 15:23:21 GMT+0000 (UTC)",
              "Balance": "1610.11"
            },
            {
              "Id": "5d2713f3fa58f81da878fbcb",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "Bernard",
              "LastName": "Vaughn",
              "DateOfBirth": "Wed Jun 16 2004 00:10:19 GMT+0000 (UTC)",
              "Email": "bernard.vaughn@somecompany.me",
              "Phones": [
                "+1 (978) 551-3988"
              ],
              "Address": "952 Williamsburg Street, Trexlertown, Alaska, 4119",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Sat Aug 22 2020 15:08:29 GMT+0000 (UTC)",
              "Balance": "3372.05"
            },
            {
              "Id": "5d2713f3a915806b814dc7f5",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "Josefina",
              "LastName": "Morris",
              "DateOfBirth": "Wed Aug 31 1994 20:04:31 GMT+0000 (UTC)",
              "Email": "josefina.morris@somecompany.net",
              "Phones": [
                "+1 (961) 536-2714"
              ],
              "Address": "759 Lewis Avenue, Savage, Mississippi, 2201",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Thu Oct 05 2023 13:23:38 GMT+0000 (UTC)",
              "Balance": "3807.92"
            },
            {
              "Id": "5d2713f388b211001dc7c30c",
              "IsActive": false,
              "Gender": "female",
              "FirstName": "Manuela",
              "LastName": "Trevino",
              "DateOfBirth": "Fri Sep 30 1983 08:48:39 GMT+0000 (UTC)",
              "Email": "manuela.trevino@somecompany.ca",
              "Phones": [
                "+1 (873) 568-2538"
              ],
              "Address": "820 Howard Alley, Ruffin, Massachusetts, 9254",
              "SubscriptionId": "5d2712b81b37d8d1088ca8ab",
              "ExpirationDate": "Tue May 10 2022 23:44:18 GMT+0000 (UTC)",
              "Balance": "3697.32"
            },
            {
              "Id": "5d2713f357cc5c47cacd8c4f",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Matthews",
              "LastName": "Bell",
              "DateOfBirth": "Sun Jul 31 1988 15:47:34 GMT+0000 (UTC)",
              "Email": "matthews.bell@somecompany.tv",
              "Phones": [
                "+1 (925) 440-2235",
                "+1 (857) 513-2827",
                "+1 (917) 446-3904",
                "+1 (933) 429-2219"
              ],
              "Address": "297 Montauk Court, Carlton, District Of Columbia, 4101",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Thu Oct 22 2020 23:37:54 GMT+0000 (UTC)",
              "Balance": "3897.53"
            },
            {
              "Id": "5d2713f3704b9799949c9c22",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "Twila",
              "LastName": "Walter",
              "DateOfBirth": "Tue Dec 30 1986 07:01:34 GMT+0000 (UTC)",
              "Email": "twila.walter@somecompany.name",
              "Phones": [
                "+1 (824) 573-2855",
                "+1 (889) 485-3224",
                "+1 (921) 433-3770",
                "+1 (954) 459-2615"
              ],
              "Address": "843 Caton Place, Brethren, Wyoming, 3494",
              "SubscriptionId": "5d2712b8bf4218213ad98990",
              "ExpirationDate": "Wed May 08 2024 02:16:19 GMT+0000 (UTC)",
              "Balance": "2504.93"
            },
            {
              "Id": "5d2713f3e6beeafac92dea59",
              "IsActive": false,
              "Gender": "female",
              "FirstName": "Evelyn",
              "LastName": "Morse",
              "DateOfBirth": "Thu May 27 2004 16:50:39 GMT+0000 (UTC)",
              "Email": "evelyn.morse@somecompany.com",
              "Phones": [
                "+1 (881) 571-2856",
                "+1 (926) 581-3870",
                "+1 (984) 400-3782"
              ],
              "Address": "981 Lewis Place, Cobbtown, North Carolina, 4718",
              "SubscriptionId": "5d2712b81b37d8d1088ca8ab",
              "ExpirationDate": "Sun May 28 2023 23:51:27 GMT+0000 (UTC)",
              "Balance": "1289.88"
            },
            {
              "Id": "5d2713f32980b0b8cafcf6b1",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Shepard",
              "LastName": "Decker",
              "DateOfBirth": "Fri Oct 24 1980 17:34:53 GMT+0000 (UTC)",
              "Email": "shepard.decker@somecompany.biz",
              "Phones": [
                "+1 (840) 570-2575",
                "+1 (982) 448-2437",
                "+1 (899) 428-2533"
              ],
              "Address": "862 Powell Street, Beaverdale, New Hampshire, 2475",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Mon Nov 29 2021 18:30:35 GMT+0000 (UTC)",
              "Balance": "2338.89"
            },
            {
              "Id": "5d2713f354d3fdb4c3d624e3",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "Rush",
              "LastName": "Cohen",
              "DateOfBirth": "Fri Sep 24 1993 01:38:06 GMT+0000 (UTC)",
              "Email": "rush.cohen@somecompany.biz",
              "Phones": [
                "+1 (854) 543-3029",
                "+1 (945) 491-3219",
                "+1 (951) 479-2203",
                "+1 (976) 509-2915"
              ],
              "Address": "165 Lake Avenue, Jennings, Michigan, 1427",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Sun Nov 13 2022 15:09:37 GMT+0000 (UTC)",
              "Balance": "3576.27"
            },
            {
              "Id": "5d2713f3b9021851406bd8e6",
              "IsActive": true,
              "Gender": "male",
              "FirstName": "Melendez",
              "LastName": "Watkins",
              "DateOfBirth": "Mon May 17 1993 07:15:51 GMT+0000 (UTC)",
              "Email": "melendez.watkins@somecompany.info",
              "Phones": [
                "+1 (992) 503-2661",
                "+1 (978) 433-3370",
                "+1 (832) 404-3213"
              ],
              "Address": "379 Creamer Street, Disautel, Nevada, 1225",
              "SubscriptionId": "5d2712b81b37d8d1088ca8ab",
              "ExpirationDate": "Fri Nov 27 2020 23:32:55 GMT+0000 (UTC)",
              "Balance": "1088.42"
            },
            {
              "Id": "5d2713f375d20011c561d9dc",
              "IsActive": false,
              "Gender": "male",
              "FirstName": "Herring",
              "LastName": "Olson",
              "DateOfBirth": "Mon Apr 21 1986 02:02:27 GMT+0000 (UTC)",
              "Email": "herring.olson@somecompany.us",
              "Phones": [
                "+1 (986) 563-2214",
                "+1 (805) 534-3068"
              ],
              "Address": "429 Madoc Avenue, Crisman, Guam, 5096",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Wed Jan 27 2021 23:49:23 GMT+0000 (UTC)",
              "Balance": "1704.46"
            },
            {
              "Id": "5d2713f3afdc2db483d34f99",
              "IsActive": true,
              "Gender": "female",
              "FirstName": "Strong",
              "LastName": "Rogers",
              "DateOfBirth": "Wed Aug 26 2009 16:17:50 GMT+0000 (UTC)",
              "Email": "strong.rogers@somecompany.co.uk",
              "Phones": [
                "+1 (999) 512-3081",
                "+1 (828) 505-3154",
                "+1 (989) 555-2113"
              ],
              "Address": "522 Miller Place, Fresno, American Samoa, 2010",
              "SubscriptionId": "5d2712b8a264e777aa9761c1",
              "ExpirationDate": "Mon Aug 28 2023 04:10:01 GMT+0000 (UTC)",
              "Balance": "3019.22"
            }
        ]';
        $clientsArray = json_decode($clientsJson,true);
        
        foreach ($clientsArray as $key => $value) {
            $client = new Client();
            $client->id = $value["Id"];
            $client->is_active = $value["IsActive"];
            $client->gender = $value["Gender"];
            $client->first_name = $value["FirstName"];
            $client->last_name = $value["LastName"];
            $client->date_of_birth = $value["DateOfBirth"];
            $client->email = $value["Email"];
            $client->phones = json_encode($value["Phones"]);
            $client->address = $value["Address"];
            $client->subscription_id = $value["SubscriptionId"];
            $client->expiration_date = $value["ExpirationDate"];
            $client->balance = $value["Balance"];
            $client->save();
        }
    }
}
