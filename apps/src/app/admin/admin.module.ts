import { NgModule, NO_ERRORS_SCHEMA } from '@angular/core';
import { FormsModule } from '@angular/forms';
import {CommonModule} from '@angular/common';
import { RouterModule } from '@angular/router';
import { AdminService } from './services/admin.service';

import { routes } from './routes';

import {ControllerAdmin}  from './controllers/admin.controller';

@NgModule({
    imports: [
      CommonModule,
      routes,
      FormsModule
    ],
    schemas: [
        NO_ERRORS_SCHEMA
    ],
    declarations: [
      ControllerAdmin
    ],
    exports: [
        RouterModule
    ],
    providers: [
      AdminService
    ]
})
export class AdminModule {
}
