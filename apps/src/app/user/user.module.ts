import { NgModule, NO_ERRORS_SCHEMA } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { AuthenticationService } from './services/aut.service';
//import { SearchPipe } from './pipe/filter.pipe';
//import { routes } from './routes';

//import { ControllerForPage3 } from './controllers/page3.controller';

@NgModule({
  imports: [
    CommonModule,
   // routes,
    FormsModule
  ],
  schemas: [
    NO_ERRORS_SCHEMA
  ],
  declarations: [
  //  ControllerForPage3,
   // SearchPipe
  ],
  exports: [
    RouterModule
  ],
  providers: [
    AuthenticationService
  ]
})
export class userModule {
}
