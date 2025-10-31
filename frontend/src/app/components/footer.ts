import { DatePipe } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'ots-footer',
  imports: [DatePipe],
  template: `<footer class="min-h-full flex justify-center items-center bg-amber-900 text-gray-300">
      &copy;OTS - {{date | date}}
      </footer>`,  
})
export class Footer {
  date = new Date();
}
