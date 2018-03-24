import {ModuleWithProviders} from '@angular/core';
import {RouterModule} from '@angular/router';

//controllers

import {ControllerAdmin} from './controllers/admin.controller';

export const routes: ModuleWithProviders = RouterModule.forChild([
  {
        path: '',
        component: ControllerAdmin
   }
]);
