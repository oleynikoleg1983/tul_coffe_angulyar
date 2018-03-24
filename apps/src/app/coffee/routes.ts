import { ModuleWithProviders } from '@angular/core';
import { RouterModule } from '@angular/router';

//controllers
import { ControllerCoffee } from './controllers/coffee.controller';

export const routes: ModuleWithProviders = RouterModule.forChild([
  {
    path: '',
    component: ControllerCoffee
  }
]);
