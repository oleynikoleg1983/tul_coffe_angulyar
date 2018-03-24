import { OnInit } from '@angular/core';
//import {ActivatedRoute, Router} from '@angular/router';

export class AbstractController implements OnInit {
  public errors: any;
  public inited: boolean = false;
  public isMobile: boolean;

  protected init() {
  }

  ngOnInit() {
    console.log('AbstractController ngOnInit');
    // this.router.navigate(['/workshop/views']);
    this.init();
    this.inited = true;
  }
  
}
