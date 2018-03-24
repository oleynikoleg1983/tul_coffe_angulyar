import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { FormsModule } from '@angular/forms';
import { APP_BASE_HREF } from '@angular/common';
import { HTTP_INTERCEPTORS, HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    RouterModule.forRoot([
     {
        path: 'admin',
        loadChildren: './admin/admin.module#AdminModule'
     },
     {
       path: 'coffee',
       loadChildren: './coffee/coffee.module#CoffeeModule'
     },
      //{
      //  path: 'site/index/index',
     //   loadChildren: './coffee/coffee.module#CoffeeModule'
    //  }
      // {
      //   path: 'store',
      //  loadChildren: './store/store.module#StroreModule'
      //  },
     //,
     //{////test
     //  path: 'View/SurveyApp',
     //  loadChildren: './path1/path1.module#Path1Module'
    // },
    ])

  ],
  providers: [{ provide: APP_BASE_HREF, useValue: '' }], //site/index/index

  bootstrap: [AppComponent]
})
export class AppModule { }
