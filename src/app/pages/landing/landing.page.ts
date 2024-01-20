import { Component, ElementRef, OnInit, ViewChild } from '@angular/core';

@Component({
  selector: 'app-landing',
  templateUrl: './landing.page.html',
  styleUrls: ['./landing.page.scss'],
})
export class LandingPage implements OnInit {
  @ViewChild('div') div: ElementRef;
  // container = document.querySelector('.text1');

  speeds = {
     pause: 500, //Higher number = longer delay
     slow: 120,
     normal: 90,
     fast: 40,
     superFast: 10
  };

  textLines = [
     { speed: this.speeds.slow, content: 'Oh, hello!' },
     { speed: this.speeds.pause, content: '', pause: true },
     { speed: this.speeds.normal, content: 'Have you seen my pet' },
     { speed: this.speeds.fast, content: 'frog', classes: ['green'] },
     { speed: this.speeds.normal, content: 'around?' },
     { speed: this.speeds.normal, content: 'I think he\'s' },
     { speed: this.speeds.normal, content: 'fjdslafjlsdfj jf ;sjf l;j fs fdsa fs ajf sjf jds jds jfd jfds ajdsa js jlf dsja fj s  dsajl '}
  ];

  characters = [];

  constructor() { }




  // revealOneCharacter(list: any[]) {
  //    const next = list.splice(0, 1)[0];
  //    next.span.classList.add('revealed');
  //    next.classes.forEach((c) => {
  //       next.span.classList.add(c);
  //    });
  //    const delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

  //    if (list.length > 0) {
  //       setTimeout(function() {
  //          this.revealOneCharacter(list);
  //       }, delay);
  //    }
  // }

  //Kick it off
//************************************** */
  revealOneCharacter(list) {
    const next = list.splice(0, 1)[0];
    next.span.classList.add('revealed');
    next.classes.forEach((c) => {
       next.span.classList.add(c);
    });
    const delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

    if (list.length > 0) {
      setTimeout(() => {
        this.revealOneCharacter(list);
      }, delay);
    }
 }



  ngOnInit() {
this.textLines.forEach((line, index) => {
  if (index < this.textLines.length - 1) {
    line.content += ' ';
    // console.log(line.content);
  }
  line.content.split('').forEach((character) => {
    // container = document.querySelector('.text1');
    // addElement() {
    //   const p: HTMLParagraphElement = this.renderer.createElement('p');
    //   p.innerHTML = "add new"
    //   this.renderer.appendChild(this.div.nativeElement, p)
    // }
    // const span = document.createElement('span');
    const span: HTMLSpanElement = document.createElement('span');
    span.innerHTML = character;
    // console.log(span);
    document.querySelector('.text1').appendChild(span);
// character = span.textContent;
    // span.textContent = character;
    // console.log(span.textContent);
    // this.container.appendChild(span);
    this.characters.push({
      span: span,
      delayAfter: line.speed,
      isSpace: character === ' ',
      pause: line.pause,
      classes: line.classes || []
    });
});
});

   //Kick it off
//**************** */
   setTimeout(() => {
      this.revealOneCharacter(this.characters);
      console.log(this.characters);
   }, 6000);

}

}
