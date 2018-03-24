import { ModuleWithProviders } from '@angular/core';
import { RouterModule } from '@angular/router';

//controllers

import { ControllerTaskForms } from './controllers/taskForms.controller';

export const routes: ModuleWithProviders = RouterModule.forChild([
  {
    path: '',//   path1/start
    component: ControllerTaskForms
  }
]);
