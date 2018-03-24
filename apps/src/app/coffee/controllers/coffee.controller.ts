import { Component, OnInit } from '@angular/core';
import { Location } from '@angular/common';
import { ActivatedRoute } from '@angular/router';
import { CoffeeService } from '../services/coffee.service';
import { AbstractController } from '../../base/abstract.controller';
import {menuModel} from "../models/menu.model";

@Component({
  templateUrl: '../../../views/coffee/pageView.html'
})

export class ControllerCoffee extends AbstractController implements OnInit{

 // public query: string;
 // public products: menuModel [];
  public products: menuModel[];
  public choiceProductElement : menuModel;
  public datas: any[];

  constructor(
    private _service: CoffeeService
  ) {
    super();
  }

  onChange() {
  }

  protected init() {
    this.products = <menuModel[]> [];
    console.log('session', window);
 //   this.getUsersForQuestion('');
    this.getMenu();
    this.initDD();
  }

  public getMenu() {
    //this._service.getMenu()
    this._service.getMenu()
      .then(res => {
        this.products = res;
       // console.log('this.data', this.products);
      })
      .catch(err => {
        if (err.status == 403) {
          //this.CbrAuthService.onAccessDenied();
        }
      });
  }

  /*public getUsersForQuestion(data) {
    console.log('data -- ', data);
    this._service.getUsersForQuestion(data)
      .then(res => {
        this.users = res.Data;
        //console.log('this.data', this.data);
      })
      .catch(err => {
        if (err.status == 403) {
          //this.CbrAuthService.onAccessDenied();
        }
      });

  }
*/

  public choiceProduct(data) {
    console.log('data', data);
    this.choiceProductElement = data;
    this.choiceProductElement.count = 1;
  }

  public reCount(data){
    if (data == 'add') {
      this.choiceProductElement.count ++
    } else if (this.choiceProductElement.count > 1) {
      this.choiceProductElement.count --;
    }

  }

  public sellProduct() {
    console.log('this.choiceProductElement' ,this.choiceProductElement);
  }


  public initDD() {

  this.datas = [
    {id: "1", name: "Американо", description: "saeco", price: "10", created_at: "2017-12-23"},
    {id: "1", name: "Американо П", description: "saeco", price: "10", created_at: "2017-12-23"},
    {id: "1", name: "Еспресо П", description: "saeco", price: "10", created_at: "2017-12-23"},
    {id: "1", name: "Еспресо П", description: "з молоком Професійн", price: "10", created_at: "2017-12-23"},
    {id: "1", name: "Американо", description: "saeco", price: "10", created_at: "2017-12-23"},
    {id: "1", name: "Американо", description: "saeco", price: "10", created_at: "2017-12-23"},
    {id: "1", name: "Американо", description: "saeco", price: "10", created_at: "2017-12-23"},
    {id: "1", name: "Американо", description: "saeco", price: "10", created_at: "2017-12-23"}
  ]

  }
}
