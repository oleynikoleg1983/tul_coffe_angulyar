import { NgModule, NO_ERRORS_SCHEMA } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { CoffeeService } from './services/coffee.service';
//import { SearchPipe } from '../store/pipe/filter.pipe';
import { routes } from './routes';
import {Ng2Bs3ModalModule} from '../../../node_modules/ng2-bs3-modal/ng2-bs3-modal';

import { ControllerCoffee } from './controllers/coffee.controller';

@NgModule({
  imports: [
    CommonModule,
    routes,
    FormsModule,
    Ng2Bs3ModalModule
  ],
  schemas: [
    NO_ERRORS_SCHEMA
  ],
  declarations: [
    ControllerCoffee,
  //  SearchPipe
  ],
  exports: [
    RouterModule
  ],
  providers: [
    CoffeeService
  ]
})
export class CoffeeModule {
}
