var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent
var recognition = new SpeechRecognition();
var speechRecognitionList = new SpeechGrammarList();

recognition.grammars = speechRecognitionList;
recognition.continuous = true;
recognition.lang = 'en-US';
recognition.interimResults = false;
recognition.maxAlternatives = 1;


const commands = 
{
  //"search": term => (setTimeout(() => window.open('http://google.com/search?q='+term), 0.100)),
  "navigate to": destination => navigateTo(destination),
  "go to": destination => navigateTo(destination),
  "click on downloads": destination => downl(destination),
  "click on download": destination => downl(destination),
  "click": destination => navigateTo(destination),
  "click on": destination => navigateTo(destination),
  "open": destination => navigateTo(destination),
  "press": destination => navigateTo(destination),
"press the icon of": destination => pressicon(destination),
"press the symbol of": destination => pressicon(destination),
"load": destination => navigateTo(destination),
"push": destination => navigateTo(destination),
"open": destination => navigateTo(destination),
"tap": destination => navigateTo(destination),
"tap the icon of": destination => pressicon(destination),
"tap the symbol of": destination => pressicon(destination),
"tap the image of": destination => pressicon(destination),
"tap on": destination => navigateTo(destination),

  //Add more commands here in same syntax :)
};

function pressicon(destination)   
{ 
 
   const destinationLocations = {
india: "https://bhuvan-app1.nrsc.gov.in/bhuvan2d/bhuvan/bhuvan2d.php",
earth: "https://bhuvan-app1.nrsc.gov.in/globe/3d.php",
arrow: "https://www.nrsc.gov.in/EO_Earth_Objective",
sun: "https://www.nrsc.gov.in/EO_Earth_Objective",
cloud: "https://www.nrsc.gov.in/EO_Earth_Objective",
"sun and cloud": "https://www.nrsc.gov.in/EO_Earth_Objective",
tides: "https://bhuvan-app1.nrsc.gov.in/bhuvan2d/bhuvan/bhuvan2d.php?toolid=ocean",
grass: "https://bhuvan-app1.nrsc.gov.in/island/mha_islands.php",
plant: "https://bhuvan-app1.nrsc.gov.in/pmksy",
car: "https://bhuvan-app1.nrsc.gov.in/toll",
corn: "https://bhuvan-app1.nrsc.gov.in/chaman/",
"bar graph": "https://bhuvan-app1.nrsc.gov.in/social_justice",
"qutub minar": "https://bhuvan-app1.nrsc.gov.in/culture_monuments/",
drop:"https://bhuvan-app1.nrsc.gov.in/mowr_ganga/",
bird: "https://bhuvan-app1.nrsc.gov.in/flycatchers",
delta: "https://bhuvan-app1.nrsc.gov.in/deltas/",
deer: "https://bhuvan-app1.nrsc.gov.in/moef/",
handpump: "https://bhuvan-app1.nrsc.gov.in/gwis/",
girl: "https://bhuvan-app1.nrsc.gov.in/mhrd_ncert",
boy: "https://bhuvan-app1.nrsc.gov.in/mhrd_ncert",
pipeline: "https://bhuvan-app1.nrsc.gov.in/pipeline/",
pipe: "https://bhuvan-app1.nrsc.gov.in/pipeline/",
"coconut trees": "https://bhuvan-app1.nrsc.gov.in/toll",
island: "https://bhuvan-app1.nrsc.gov.in/toll",
clock: "https://bhuvan-app1.nrsc.gov.in/vehicletracking",
house: "https://bhuvan-app1.nrsc.gov.in/state/AP_housing/"



 };
      const location = destinationLocations[destination];
  if (location) {

   setTimeout(() => window.open(location), 0.100);
    //window.location.href = location;
  } else {
    console.log(`Unknown destination: '${destination}'`);
  }
}


function navigateTo(destination)   
{ 
 
   const destinationLocations = {
          
"bhuvan 2D": "https://bhuvan-app1.nrsc.gov.in/bhuvan2d/bhuvan/bhuvan2d.php",
"bhuvan 3D": "https://bhuvan-app1.nrsc.gov.in/globe/3d.php",
"bhuvan today": "https://bhuvan-app1.nrsc.gov.in/bhuvan2d/bhuvan/bhuvan2d.php",
"bhagwan 3D": "https://bhuvan-app1.nrsc.gov.in/globe/3d.php",
"open data archive": "https://www.nrsc.gov.in/EO_Earth_Objective",
"climate and environment": "https://www.nrsc.gov.in/EO_Earth_Objective",
"thematic services": "https://bhuvan-app1.nrsc.gov.in/thematic",
"disaster managent support services": "https://bhuvan-app1.nrsc.gov.in/bhuvandisaster",
"ocean services": "https://bhuvan-app1.nrsc.gov.in/bhuvan2d/bhuvan/bhuvan2d.php?toolid=ocean",
hailstrom: "https://bhuvan-app1.nrsc.gov.in/island/mha_islands.php",
PMKSY: "https://bhuvan-app1.nrsc.gov.in/pmksy",
ENVIS: "https://bhuvan-app1.nrsc.gov.in/envis",
"toll information": "https://bhuvan-app1.nrsc.gov.in/toll",
chaman: "https://bhuvan-app1.nrsc.gov.in/chaman/",
"census data": "https://bhuvan-app1.nrsc.gov.in/social_justice",
CRIS: "https://bhuvan-app1.nrsc.gov.in/moef_cris",
monuments: "https://bhuvan-app1.nrsc.gov.in/culture_monuments/",
"clean ganga": "https://bhuvan-app1.nrsc.gov.in/mowr_ganga/",
"flood warning": "https://bhuvan-app1.nrsc.gov.in/fews/",
"flycatherss distribution": "https://bhuvan-app1.nrsc.gov.in/flycatchers",
"deltas of  india": "https://bhuvan-app1.nrsc.gov.in/deltas/",
"environment and forest": "https://bhuvan-app1.nrsc.gov.in/moef/",
"ground water": "https://bhuvan-app1.nrsc.gov.in/gwis/",       
postal: "https://bhuvan-app1.nrsc.gov.in/postal",
"sat AIBP": "https://bhuvan-app1.nrsc.gov.in/aibp/aibp.php",
"school bhuvan": "https://bhuvan-app1.nrsc.gov.in/mhrd_ncert",
"piipeline grid": "https://bhuvan-app1.nrsc.gov.in/pipeline/",
watersheds: "https://bhuvan-app1.nrsc.gov.in/iwmp/",
"flood vulnerability assessment system": "https://bhuvan-app1.nrsc.gov.in/nfvas/",
"urban survey": "https://bhuvan-app1.nrsc.gov.in/urbanframesurvey/",
"island information": "https://bhuvan-app1.nrsc.gov.in/toll",
"pest surveillance": "https://bhuvan-app1.nrsc.gov.in/pest/pest.php",
RKVY: "https://bhuvan-app1.nrsc.gov.in/rkvy/index.php",
plantation: "https://bhuvan-app1.nrsc.gov.in/plantation/plantation.php",
MoEFCC: "https://bhuvan-app1.nrsc.gov.in/moef",
"punjab forest": "https://bhuvan-app1.nrsc.gov.in/pb_forest",
"tripura forest": "https://bhuvan-app1.nrsc.gov.in/tr_forest",
"decentralised planning": "https://bhuvan-panchayat.nrsc.gov.in/",
walamtari: "https://bhuvan-app1.nrsc.gov.in/walamtari/walamtari.php",
WBIS: "https://bhuvan-wbis.nrsc.gov.in/",
"maharashtra WRDS": "https://bhuvan-app1.nrsc.gov.in/mwrds",
"telangana WRIS": "https://bhuvan-app1.nrsc.gov.in/twris/twris.php",
archaeology: "https://bhuvan-app1.nrsc.gov.in/culture_monuments/",
"tourism GIS": "https://bhuvan-app1.nrsc.gov.in/tourism",
"municipal GIS": "https://bhuvan-app1.nrsc.gov.in/municipal",
"urban growth": "https://bhuvan-app1.nrsc.gov.in/urbangrowth",
"urban information system": "https://bhuvan-app1.nrsc.gov.in/thematic/thematic/index.php?theme=nuis",
MGNREGA: "https://bhuvan-app2.nrsc.gov.in/mgnrega/mgnrega_phase2.php",
bridge: "https://bhuvan-app2.nrsc.gov.in/mgnrega/mgnrega_phase2.php",

"data discovery": "https://bhuvan.nrsc.gov.in/geonetwork_data/index.php",
"decision support dashboard": "https://bhuvan-app1.nrsc.gov.in/thematic_dashboard",
"hydrological products": "https://bhuvan-app3.nrsc.gov.in/nices/",
"image gallery": "https://bhuvan-app1.nrsc.gov.in/imagegallery/bhuvan.html",
"internation disasters": "https://bhuvan-app1.nrsc.gov.in/international_disaster",
"multilingual translation": "https://bhuvan-app1.nrsc.gov.in/multilingual",
translate: "https://bhuvan-app1.nrsc.gov.in/multilingual",
"online shapefile creation": "https://bhuvan-mapper1.nrsc.gov.in/onlineshp",
"oscat 3D": "https://bhuvan-app1.nrsc.gov.in/scatsat3d/viewer.php",
"smart tracking": "https://bhuvan-app1.nrsc.gov.in/vehicletracking",
suvidha: "https://bhuvan-suvidha1.nrsc.gov.in/",
search: "https://bhuvan.nrsc.gov.in/geonetwork_data/index.php",
"bhuvan store": "https://bhuvan-app1.nrsc.gov.in/2dresources/bhuvanstore.php",
"bhuvan collators": "https://bhuvan-app1.nrsc.gov.in/collaboration/",
NRSC: "https://www.nrsc.gov.in/",
bhuvan: "https://bhuvan.nrsc.gov.in/bhuvan_links.php", 
"indian geo platform of isro": "https://bhuvan.nrsc.gov.in/bhuvan_links.php",
"andra pradesh": "https://bhuvan-app1.nrsc.gov.in/state/AP",
"arunachal pradesh": "https://bhuvan-app1.nrsc.gov.in/state/AR",
assam: "https://bhuvan-app1.nrsc.gov.in/state/AS",
bihar: "https://bhuvan-app1.nrsc.gov.in/state/BR",
chhatishgarh: "https://bhuvan-app1.nrsc.gov.in/state/CH",
delhi: "https://bhuvan-app1.nrsc.gov.in/state/DL",
goa: "https://bhuvan-app1.nrsc.gov.in/state/GA",
gujarat: "https://bhuvan-app1.nrsc.gov.in/state/GJ",
harayana: "https://bhuvan-app1.nrsc.gov.in/state/HR",
"himachal pradesh": "https://bhuvan-app1.nrsc.gov.in/state/HP",
jharkhand: "https://bhuvan-app1.nrsc.gov.in/state/JH",
"jammu and kashmir": "https://bhuvan-app1.nrsc.gov.in/state/JK",
karnataka: "https://bhuvan-app1.nrsc.gov.in/state/KA",
kerala: "https://bhuvan-app1.nrsc.gov.in/state/KL",
"madhaya pradesh": "https://bhuvan-app1.nrsc.gov.in/state/MP",
maharashtra: "https://bhuvan-app1.nrsc.gov.in/state/MH",
manipur: "https://bhuvan-app1.nrsc.gov.in/state/MN",
meghalaya: "https://bhuvan-app1.nrsc.gov.in/state/ML",
mizoram: "https://bhuvan-app1.nrsc.gov.in/state/MZ",
nagaland: "https://bhuvan-app1.nrsc.gov.in/state/NL",
odisha: "https://bhuvan-app1.nrsc.gov.in/state/OR",
punjab: "https://bhuvan-app1.nrsc.gov.in/state/PB",
"PHGW GIS": "https://bhuvan-app1.nrsc.gov.in/pgw/index.php",
"election GIS": "https://bhuvan-app1.nrsc.gov.in/pb_election/index.php",
rajasthan: "https://bhuvan-app1.nrsc.gov.in/state/RJ",
sikkim: "https://bhuvan-app1.nrsc.gov.in/state/SK",
"tamil nadu": "https://bhuvan-app1.nrsc.gov.in/state/TN",
"amma unavagam": "https://bhuvan-app3.nrsc.gov.in/meal_center/index.php?state=TN",
telangana: "https://bhuvan-app1.nrsc.gov.in/state/TS",
annapurna: "https://bhuvan-app3.nrsc.gov.in/meal_center/index.php?state=TS",
tripura: "https://bhuvan-app1.nrsc.gov.in/state/TR",
uttarakhand: "https://bhuvan-app1.nrsc.gov.in/state/UK",
"uttar pradesh": "https://bhuvan-app1.nrsc.gov.in/state/UP",
"west bengal": "https://bhuvan-app1.nrsc.gov.in/state/WB",

"coastal information": "https://bhuvan-app1.nrsc.gov.in/coastal_home/coastal.php",
"tea CIS": "https://bhuvan-app1.nrsc.gov.in/tea/teaPortal/tea.php",
"city park kolkata": "https://bhuvan-app1.nrsc.gov.in/parks/rc_bhuvan.php",
"asset mapping": "https://bhuvan-app1.nrsc.gov.in/state/AP_housing/",




"android app": "https://bhuvan-app3.nrsc.gov.in/mobile_app/bhuvan_mobile_app.php?proj_code=118",




"android app": "https://bhuvan-app1.nrsc.gov.in/rtv/index.html",

"code4all layer stacking": "https://bhuvan.nrsc.gov.in/codes4all/layer_stacking.zip",
"bhuvan user handbook and others": "https://bhuvan.nrsc.gov.in/forum/viewtopic.php?f=3&t=247",
"mobile bhuvan": "https://bhuvan-app3.nrsc.gov.in/mobile_app/bhuvan_mobile_app.php?proj_code=116",

plus: "https://bhuvan.nrsc.gov.in/bhuvan_links.php#zoomIn",
"zoom in": "https://bhuvan.nrsc.gov.in/bhuvan_links.php#zoomIn",

minus: "https://bhuvan.nrsc.gov.in/bhuvan_links.php#zoomOut",
"zoom out": "https://bhuvan.nrsc.gov.in/bhuvan_links.php#zoomOut",


                        };
      const location = destinationLocations[destination];
  if (location) {

   setTimeout(() => window.open(location), 0.100);
    //window.location.href = location;
  } else {
    console.log(`Unknown destination: '${destination}'`);
  }
}

function downl(destination)
{
 // const destinationLocations = { "downloads" : "bhuvan_links_download tab.php" };
  const location = "bhuvan_links_download tab.php"
window.location.href = location;


}


function onSpeechRecognitionEvents() {
  recognition.addEventListener("result", event =>
 {
    if (typeof event.results === "undefined") return;
    const transcript = event.results[event.results.length - 1][0].transcript
      .toLowerCase()
      .trim();

    for (let command in commands) {
      if (transcript.indexOf(command) === 0) {
        if (transcript[command.length] === undefined) {
          commands[command]();
        } else {
          const param = transcript
            .substring(command.length, transcript.length)
            .trim();
          commands[command](param);
        }
      }
    }
 } );
}


//if (SpeechRecognition) {
  onSpeechRecognitionEvents();
  recognition.start();
//}
