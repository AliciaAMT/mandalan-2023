
import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';
import { redirectUnauthorizedTo, redirectLoggedInTo, canActivate } from '@angular/fire/auth-guard';
import { IntroGuard } from './guards/intro.guard';
import { AutoLoginGuard } from './guards/auto-login.guard';

const redirectUnauthorizedToLogin = () => redirectUnauthorizedTo(['landing']);
const redirectLoggedInToHome = () => redirectLoggedInTo(['tabs']);

const routes: Routes = [

  {
    path: '',
    loadChildren: () => import('./tabs/tabs.module').then(m => m.TabsPageModule),
    ...canActivate(redirectUnauthorizedToLogin)
  },
  {
  path: 'login',
  loadChildren: () => import('./pages/login/login.module').then((m) => m.LoginPageModule),
  ...canActivate(redirectLoggedInToHome), // If authenticated, redirect to home
},
{
  path: 'intro',
  loadChildren: () => import('./pages/intro/intro.module').then((m) => m.IntroPageModule)
},
{
  path: 'tabs',
  loadChildren: () => import('./tabs/tabs.module').then((m) => m.TabsPageModule),
  ...canActivate(redirectUnauthorizedToLogin), // If not authenticated, redirect to login
},
  {
    path: 'landing',
    loadChildren: () => import('./pages/landing/landing.module').then( m => m.LandingPageModule),
    canLoad: [IntroGuard, AutoLoginGuard], // Check if we should show the introduction or forward to inside
 },
{
  path: '**',
  redirectTo: '',
  pathMatch: 'full'
},
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
