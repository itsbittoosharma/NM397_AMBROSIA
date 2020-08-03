using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Speech.Recognition;
using System.Speech.Synthesis;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace SpeechRecognization
{
    public partial class Form1 : Form
    {
        static SpeechRecognitionEngine _recognizer = null;
        static ManualResetEvent manualResetEvent = null;
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            RecognizeSpeechAndMakeSureTheComputerSpeaksToYou();
            manualResetEvent = new ManualResetEvent(false);
        }

      
             #region Recognize speech and make sure the computer speaks to you (text to speech)
        static void RecognizeSpeechAndMakeSureTheComputerSpeaksToYou()
        {
            _recognizer = new SpeechRecognitionEngine();
            _recognizer.LoadGrammar(new Grammar(new GrammarBuilder("neeche jao")));




            // load a "hello computer" grammar
            _recognizer.SpeechRecognized += _recognizeSpeechAndMakeSureTheComputerSpeaksToYou_SpeechRecognized; // if speech is recognized, call the specified method
            _recognizer.SpeechRecognitionRejected += _recognizeSpeechAndMakeSureTheComputerSpeaksToYou_SpeechRecognitionRejected;
            _recognizer.SetInputToDefaultAudioDevice(); // set the input to the default audio device
            _recognizer.RecognizeAsync(RecognizeMode.Multiple); // recognize speech asynchronous
        }


        private static void _recognizeSpeechAndMakeSureTheComputerSpeaksToYou_SpeechRecognitionRejected(object sender, SpeechRecognitionRejectedEventArgs e)
        {   
            if (e.Result.Alternates.Count == 0)
            {
                Console.WriteLine("No candidate phrases found.");
                return;
            }
            Console.WriteLine("Speech rejected. Did you mean:");
            foreach (RecognizedPhrase r in e.Result.Alternates)
            {
                Console.WriteLine("    " + r.Text);
                MessageBox.Show("Did you mean : neeche jao");
            }
        }
        static void _recognizeSpeechAndMakeSureTheComputerSpeaksToYou_SpeechRecognized(object sender, SpeechRecognizedEventArgs e)
        {
            MessageBox.Show(e.Result.Text);
            if (e.Result.Text == "Login")
            {
                SpeechSynthesizer speechSynthesizer = new SpeechSynthesizer();
                
                speechSynthesizer.Dispose();
               
            }
            manualResetEvent.Set();
        }
             #endregion
   }
}
